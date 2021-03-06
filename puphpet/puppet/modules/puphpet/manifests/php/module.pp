/*
 * This "translates" PHP module package names into system-specific names.
 */

define puphpet::php::module (
  $service_autorestart
){

  $package = $::osfamily ? {
    'Debian' => {
      'mbstring' => false, # Comes packaged with PHP, not available in repos
      'memcached' => $::operatingsystem ? {
        'ubuntu' => $puphpet::php::settings::version ? {
          '70'    => 'php-memcached',
          default => false,
        },
        default  => false,
      },
    },
    'Redhat' => {
      #
    }
  }

  $downcase_name = downcase($name)

  if has_key($package, $downcase_name) {
    $package_name  = $package[$downcase_name]
    $module_prefix = false
  }
  else {
    $package_name  = $name
    $module_prefix = $puphpet::php::settings::prefix
  }

  if $package_name and ! defined(Php::Module[$package_name])
    and $puphpet::php::settings::enable_modules
  {
    ::php::module { $package_name:
      service_autorestart => $service_autorestart,
      module_prefix       => $module_prefix,
    }
  }

}
