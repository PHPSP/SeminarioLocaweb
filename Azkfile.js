systems({
	nginx: {
		depends: ['php', 'websocket'],
		image: {docker: 'nginx:latest'},
		workdir: '/azk/#{manifest.dir}',
		shell: '/bin/bash',
		command: './nginx/start.sh',
		wait: 20,
		mounts: {
			'/azk/#{manifest.dir}/nginx': path('azk/nginx'),
			'/var/www': path('.'),
			'/etc/nginx/conf.d': path('azk/nginx/conf.d'),
			'/etc/nginx/nginx.conf': path('azk/nginx/nginx.conf'),
		},
		scalable: {default: 1},
		http: {
			domains: [
				'seminario.dev.azk.io'
			]
		},
		ports: {
			http: '80/tcp',
		}
	},
	php: {
		depends: [],
		image: {docker: 'php:fpm'},
		workdir: '/azk/#{manifest.dir}',
		shell: '/bin/bash',
		command: './php/start.sh',
		wait: 20,
		mounts: {
			'/azk/#{manifest.dir}/php': path('azk/php'),
			'/var/www': path('.'),
		},
		scalable: {default: 1},
		ports: {
			fastcgi: '9000:9000/tcp',
		}
	},
	websocket: {
		depends: [],
		image: {docker: 'php:fpm'},
		workdir: '/azk/#{manifest.dir}',
		shell: '/bin/bash',
		command: './websocket/start.sh',
		wait: 20,
		mounts: {
			'/azk/#{manifest.dir}/websocket': path('azk/websocket'),
			'/var/www': path('.'),
		},
		scalable: {default: 1},
		ports: {
			websocket: '777:777/tcp',
		}
	}
});

setDefault('nginx');
