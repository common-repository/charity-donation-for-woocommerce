<?php

if (!defined('ABSPATH'))
    exit;

if (!class_exists('CHDNTWC_admin')) {

    class CHDNTWC_admin {

        protected static $CHDNTWC_instance;
        
        function CHDNTWC_options_page() {
        	add_menu_page(  'Charity & Donation for Woocommerce', __( 'Charity & Donation for Woocommerce', 'charity-donation-for-woocommerce' ), 'manage_options', 'chdntwc-donation-page',array($this, 'CHDNTWC_options_page_callback'),'dashicons-money-alt');
        }


        function CHDNTWC_options_page_callback() {

        	global $chdntwc_comman;

        	$donate_1 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
				<g xmlns="http://www.w3.org/2000/svg">
					<g>
						<path d="M47.054,302h-32c-8.291,0-15,6.709-15,15v180c0,8.291,6.709,15,15,15h32c24.814,0,45-20.186,45-45V347    C92.054,322.186,71.869,302,47.054,302z" fill="#000000" data-original="#000000" style="" class=""/>
					</g>
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
					<g>
						<path d="M507.554,331.099c-1.8-2.999-4.199-5.4-6.899-7.5c-11.045-9.662-29.654-8.749-40.499,3.001l-68.101,78.6l-2.1,2.399    c-8.399,9.3-20.4,14.401-32.999,14.401h-116.4c-8.401,0-15-6.601-15-15c0-8.401,6.599-15,15-15h91.5c16.5,0,30-13.5,30-30v-0.3    c-0.3-16.5-13.5-29.7-30-29.7h-54.3c-8.996,0-18.636-3.303-26.4-9.901c-36.599-32.1-90-34.2-129.3-6.899v184.499    c29.7,8.101,60.3,12.301,91.199,12.301h133.801c32.999,0,64.2-15.601,84-42.001l72.001-96    C513.56,360.21,514.352,341.3,507.554,331.099z" fill="#000000" data-original="#000000" style="" class=""/>
					</g>
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
					<g>
						<path d="M402.264,28.995C385.627,10.297,362.564,0,337.324,0c-28.172,0-52.593,13.321-70.622,38.522    c-1.352,1.889-2.617,3.779-3.802,5.649c-1.184-1.871-2.449-3.76-3.801-5.649C241.07,13.321,216.649,0,188.477,0    c-25.24,0-48.303,10.297-64.939,28.994C107.75,46.738,99.054,70.459,99.054,95.788c0,27.525,10.681,52.924,33.611,79.934    c20.009,23.565,48.708,47.788,81.938,75.836c12.28,10.365,24.979,21.083,38.473,32.778c2.819,2.443,6.321,3.665,9.824,3.665    c3.502,0,7.005-1.222,9.824-3.665c13.492-11.693,26.189-22.41,38.469-32.773c21.342-18.014,39.773-33.57,55.767-48.66    c31.053-29.298,59.787-62.553,59.787-107.114C426.747,70.46,418.052,46.739,402.264,28.995z" fill="#000000" data-original="#000000" style="" class=""/>
					</g>
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				<g xmlns="http://www.w3.org/2000/svg">
				</g>
				</g></svg>';

			$donate_2 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m211.945 116.53c7.075 4.087 16.333 1.655 20.479-5.508 0 0 0 0 .015-.015 4.092-7.103 1.749-16.262-5.493-20.464-7.394-4.232-16.467-1.538-20.493 5.479-4.147 7.163-1.671 16.363 5.492 20.508z" fill="#000000" data-original="#000000" style="" class=""/><path d="m280.368 207.995c7.214 4.135 16.348 1.668 20.493-5.493l45-77.944c4.146-7.178 1.685-16.348-5.493-20.493l-181.861-102.042c-7.178-4.16-16.362-1.699-20.493 5.493l-45 77.93c-4.146 7.178-1.685 16.348 5.493 20.493zm-99.903-126.973c12.464-21.584 39.97-28.868 61.479-16.465 21.442 12.382 28.943 39.857 16.465 61.465v.015c-12.409 21.46-39.99 28.85-61.465 16.465-21.503-12.422-28.886-40.005-16.479-61.48z" fill="#000000" data-original="#000000" style="" class=""/><g><path d="m293.5 323.5c-16.315 0-22.402 17.063-23.146 19.359-1.836 6.441-7.651 10.886-14.354 10.886-6.702 0-12.518-4.445-14.354-10.886-.744-2.295-6.831-19.359-23.146-19.359-14.771 0-22.5 11.357-22.5 22.576 0 15.785 17.062 29.813 49.757 55.286 3.341 2.603 6.743 5.253 10.243 8.003 3.5-2.75 6.902-5.4 10.243-8.003 32.696-25.474 49.757-39.502 49.757-55.286 0-11.219-7.728-22.576-22.5-22.576z" fill="#000000" data-original="#000000" style="" class=""/><path d="m466 120h-88.392c-.445 6.817-2.269 13.51-5.797 19.6l-40.641 70.4h44.83c8.291 0 15 6.709 15 15s-6.709 15-15 15h-240c-8.291 0-15-6.709-15-15s6.709-15 15-15h86.651l-138.829-77.9c-5.499-3.169-10.067-7.302-13.696-12.1h-24.126c-8.291 0-15 6.709-15 15v362c0 8.291 6.709 15 15 15h420c8.291 0 15-6.709 15-15v-362c0-8.291-6.709-15-15-15zm-181.318 305.026c-6.17 4.807-12.549 9.777-19.312 15.187-2.739 2.191-6.055 3.287-9.37 3.287s-6.631-1.096-9.37-3.287c-6.763-5.41-13.142-10.38-19.312-15.187-35.597-27.734-61.318-47.773-61.318-78.95 0-29.482 23.061-52.576 52.5-52.576 14.565 0 27.422 5.634 37.5 16.362 10.078-10.728 22.935-16.362 37.5-16.362 29.439 0 52.5 23.094 52.5 52.576 0 31.177-25.721 51.216-61.318 78.95z" fill="#000000" data-original="#000000" style="" class=""/></g></g></g></svg>';
		
			$donate_3 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m422.683 213.806-159.974 79.886 30.631 61.262 159.074-84.588z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m249.291 293.692-159.974-79.886-29.731 56.56 159.074 84.588z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m256 193.7a72.613 72.613 0 1 0 -72.613-72.613 72.7 72.7 0 0 0 72.613 72.613zm0-68.014a22.637 22.637 0 0 1 -5-44.715v-5.261a5 5 0 1 1 10 0v5.256a22.673 22.673 0 0 1 17.639 22.075 5 5 0 0 1 -10 0 12.639 12.639 0 1 0 -12.639 12.64 22.637 22.637 0 0 1 5 44.715v6.058a5 5 0 0 1 -10 0v-6.054a22.674 22.674 0 0 1 -17.639-22.076 5 5 0 0 1 10 0 12.651 12.651 0 0 0 12.555 12.635c.029 0 .055-.009.084-.009s.055.008.084.009a12.637 12.637 0 0 0 -.084-25.278z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m416.482 300.8-122.973 65.39a5 5 0 0 1 -6.82-2.179l-25.689-51.377v181.819l155.482-75.177z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m158.632 126.082h-6.167a103.262 103.262 0 0 0 26.821 64.642l4.329-4.328a5 5 0 1 1 7.071 7.071l-4.328 4.329a103.262 103.262 0 0 0 64.642 26.821v-6.167a5 5 0 0 1 10 0v6.155a103.141 103.141 0 0 0 64.671-26.781l-4.357-4.357a5 5 0 0 1 7.071-7.071l4.354 4.354a103.054 103.054 0 0 0 26.8-64.668h-6.167a5 5 0 0 1 0-10h6.167a103.267 103.267 0 0 0 -26.821-64.643l-4.329 4.329a5 5 0 0 1 -7.071-7.072l4.328-4.328a103.257 103.257 0 0 0 -64.646-26.821v6.166a5 5 0 1 1 -10 0v-6.166a103.257 103.257 0 0 0 -64.642 26.821l4.328 4.328a5 5 0 0 1 -7.071 7.072l-4.329-4.329a103.267 103.267 0 0 0 -26.821 64.643h6.167a5 5 0 0 1 0 10zm97.368-87.613a82.613 82.613 0 1 1 -82.613 82.613 82.707 82.707 0 0 1 82.613-82.613z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m411.909 208.009-62.956-21.536a114.17 114.17 0 0 1 -12.5 14.875c-.031.033-.051.07-.083.1s-.071.054-.1.085a113.533 113.533 0 0 1 -160.167.3 3 3 0 0 1 -.845-.845 114.58 114.58 0 0 1 -11.966-14.229l-63.129 21.286 155.837 77.82z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m251 312.634-25.689 51.377a5 5 0 0 1 -6.82 2.179l-122.973-65.39v118.476l155.482 75.177zm-132.343 92.244a5 5 0 0 1 -10 0v-44.058a5 5 0 0 1 10 0zm0-64.972a5 5 0 0 1 -10 0v-5.837a5 5 0 0 1 10 0z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m408.466 97.136a5 5 0 0 0 5 5h31.044a5 5 0 0 0 0-10h-31.044a5 5 0 0 0 -5 5z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m401.841 64.925a4.975 4.975 0 0 0 2.994-1l31.044-23.257a5 5 0 0 0 -6-8l-31.039 23.255a5 5 0 0 0 3 9z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m398.84 138.35 31.044 23.256a5 5 0 1 0 6-8l-31.044-23.256a5 5 0 1 0 -6 8z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m67.49 102.136h31.044a5 5 0 1 0 0-10h-31.044a5 5 0 1 0 0 10z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m114.164 131.35a5 5 0 0 0 -7-1l-31.043 23.25a5 5 0 1 0 6 8l31.039-23.25a5 5 0 0 0 1.004-7z" fill="#000000" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m76.121 40.669 31.044 23.257a5 5 0 1 0 5.995-8l-31.044-23.26a5 5 0 1 0 -6 8z" fill="#000000" data-original="#000000" style="" class=""/></g></svg>';

 			$donate_4 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m104.938 84.24c0 22.133 8.701 42.948 24.502 58.61l126.66 125.908 126.438-125.885c15.823-15.686 24.524-36.5 24.524-58.633 0-45.741-37.599-82.953-83.813-82.953-21.247 0-41.52 7.898-57.083 22.241l-10.166 9.367-10.165-9.367c-15.564-14.343-35.836-22.241-57.083-22.241-46.215 0-83.814 37.212-83.814 82.953z" fill="#000000" data-original="#000000" style="" class=""/><path d="m271 473.244v37.469h220.339l-19.515-37.469z" fill="#000000" data-original="#000000" style="" class=""/><path d="m40.176 473.244-19.515 37.469h220.339v-37.469z" fill="#000000" data-original="#000000" style="" class=""/><path d="m512 277.823v-194.774c0-10.33-8.404-18.734-18.734-18.734s-18.734 8.404-18.734 18.734v147.106c-.12 9.146-2.751 18.32-8.057 26.354l-88.097 131.768-24.939-16.674 88.049-131.695c1.959-2.968 3.062-6.354 3.045-9.753-.023-4.607-2.011-10.38-5.44-13.81-3.539-3.538-8.243-5.487-13.248-5.487-5.004 0-9.708 1.949-13.247 5.487l-126.278 126.229c-9.878 9.88-15.32 23.07-15.32 37.137v63.533h159.468z" fill="#000000" data-original="#000000" style="" class=""/><path d="m241 379.711c0-14.067-5.442-27.256-15.323-37.139l-126.272-126.225c-3.541-3.541-8.245-5.489-13.249-5.489-5.005 0-9.709 1.949-13.248 5.488-3.463 3.463-5.403 8.444-5.439 13.109-.028 3.514 1.052 7.435 3.092 10.525l88.001 131.623-24.939 16.674-88.05-131.695c-5.328-8.069-7.971-17.265-8.071-26.427-.034 0-.034-147.106-.034-147.106 0-10.33-8.404-18.734-18.734-18.734s-18.734 8.404-18.734 18.734v194.774l81.532 165.421h159.468z" fill="#000000" data-original="#000000" style="" class=""/></g></g></svg>'; 
		
			$donate_5 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 459.909 459.909" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
					<g xmlns="http://www.w3.org/2000/svg">
						<g>
							<path d="M271.84,238.756c-13.917-1.696-30.462,1.123-49.177,8.382c-13.227,5.129-23.838,11.062-28.59,13.881    c-6.608-10.442-28.05-55.397-35.903-73.671c-3.943-9.176-17.032-27.563-30.25-22.438c-3.059,1.186-5.389,3.488-6.739,6.66    c-4.449,10.445,2.717,27.848,3.025,28.584c10.344,24.775,38.91,91.858,42.069,99.297c0.481,1.133,1.13,2.545,1.882,4.183    c1.791,3.896,4.243,9.233,5.856,14.01c2.136,6.326,1.681,8.42,1.549,8.813c-0.429,0.316-0.875,0.563-1.359,0.75    c-8.918,3.459-26.762-13.325-33.533-21.514c-6.19-7.484-19.256-11.42-27.416-8.256c-3.269,1.268-5.587,3.639-6.529,6.674    c-1.355,4.371,0.13,9.768,4.408,16.027c0.047,0.07,0.131,0.205,0.252,0.395c6.182,9.713,23.433,34.474,50.05,54.586    c17.06,12.893,34.887,21.494,52.989,25.568c22.458,5.053,45.401,3.135,68.191-5.703c24.448-9.482,38.375-27.883,41.395-54.689    c2.976-26.411-5.896-54.37-11.447-68.688C305.03,252.184,291.329,241.131,271.84,238.756z" fill="#000000" data-original="#000000" style="" class=""/>
							<path d="M156.849,101.951c-9.729,0-12.324,11.93-12.324,18.979c0,7.049,2.596,18.979,12.324,18.979    c9.727,0,12.322-11.93,12.322-18.979C169.171,113.88,166.575,101.951,156.849,101.951z" fill="#000000" data-original="#000000" style="" class=""/>
							<polygon points="249.973,123.723 260.467,123.723 255.141,109.221   " fill="#000000" data-original="#000000" style="" class=""/>
							<path d="M105.459,102.861c-0.382,0-0.756,0.02-1.12,0.062l-4.1,0.455v35.543h6.162c5.501,0,12.816-1.729,12.816-16.678    C119.218,108.928,112.086,102.861,105.459,102.861z" fill="#000000" data-original="#000000" style="" class=""/>
							<path d="M396.037,56.473H63.871C28.596,56.473,0,85.069,0,120.344c0,35.274,28.596,63.869,63.871,63.869h45.995    c-0.507-5.529-0.163-11.408,2.032-16.561c2.396-5.627,6.772-9.912,12.323-12.065c2.675-1.037,5.469-1.563,8.307-1.563    c18.148,0,31.235,21.204,34.747,29.376c0.113,0.262,0.234,0.541,0.352,0.813h228.411c35.275,0,63.871-28.595,63.871-63.869    C459.909,85.067,431.312,56.473,396.037,56.473z M106.565,147.63c-1.528,0-3.039-0.119-4.501-0.233    c-2.054-0.161-4.671-0.292-6.277-0.106l-7.152,0.832c-0.134,0.016-0.268,0.023-0.4,0.023c-1.659,0-3.106-1.203-3.376-2.881    l-0.3-1.867c-0.15-0.933,0.092-1.887,0.669-2.634c0.577-0.749,1.438-1.226,2.379-1.317l3.431-0.334V103.2l-3.738-0.805    c-1.632-0.352-2.772-1.826-2.7-3.492l0.051-1.192c0.041-0.978,0.499-1.89,1.256-2.507c0.758-0.618,1.741-0.887,2.708-0.729    l1.134,0.189c1.598,0.27,3.249,0.549,4.823,0.549c1.382,0,2.746-0.203,4.325-0.438c1.717-0.258,3.657-0.547,5.78-0.547    c14.799,0,23.991,10.356,23.991,27.029C128.667,144.205,114.819,147.63,106.565,147.63z M156.849,148.617    c-15.041,0-21.772-13.906-21.772-27.688c0-13.782,6.731-27.688,21.772-27.688c15.04,0,21.771,13.906,21.771,27.688    C178.62,134.71,171.889,148.617,156.849,148.617z M227.203,102.937h-1.752v41.271c0,1.892-1.532,3.423-3.423,3.423h-3.101    c-1.222,0-2.351-0.65-2.963-1.709l-19.104-33.031v26.031h4.135c1.892,0,3.424,1.533,3.424,3.424v1.862    c0,1.892-1.532,3.423-3.424,3.423h-15.993c-1.892,0-3.424-1.531-3.424-3.423v-1.862c0-1.891,1.532-3.424,3.424-3.424h2.657    v-35.984h-2.657c-1.892,0-3.424-1.533-3.424-3.424v-1.862c0-1.892,1.532-3.423,3.424-3.423h9.584c1.229,0,2.364,0.658,2.973,1.726    l18.691,32.724v-25.74h-4.3c-1.891,0-3.424-1.533-3.424-3.424v-1.862c0-1.892,1.533-3.423,3.424-3.423h15.253    c1.891,0,3.424,1.531,3.424,3.423v1.862C230.627,101.404,229.094,102.937,227.203,102.937z M280.58,144.208    c0,1.892-1.532,3.423-3.424,3.423h-13.855c-1.892,0-3.425-1.531-3.425-3.423v-1.862c0-1.891,1.533-3.424,3.425-3.424h2.739    l-2.415-6.49h-16.688l-2.366,6.49h2.845c1.891,0,3.423,1.533,3.423,3.424v1.862c0,1.892-1.532,3.423-3.423,3.423h-13.691    c-1.892,0-3.424-1.531-3.424-3.423v-1.862c0-1.891,1.533-3.424,3.424-3.424h1.317l16.89-44.641    c0.502-1.325,1.767-2.203,3.183-2.212c0.007,0,0.014,0,0.021,0c1.407,0,2.674,0.862,3.188,2.175l17.499,44.678h1.336    c1.892,0,3.424,1.533,3.424,3.424L280.58,144.208L280.58,144.208z M327.248,112.248c0,1.892-1.532,3.424-3.424,3.424h-2.354    c-1.891,0-3.424-1.532-3.424-3.424v-4.875c0-3.002-0.258-3.803-0.41-4.012c-0.039-0.025-0.644-0.424-3.696-0.424h-4.602v35.984    h7.339c1.892,0,3.424,1.533,3.424,3.424v1.862c0,1.892-1.532,3.423-3.424,3.423h-23.881c-1.891,0-3.424-1.531-3.424-3.423v-1.862    c0-1.891,1.533-3.424,3.424-3.424h7.339v-35.984h-4.601c-3.054,0-3.658,0.398-3.717,0.443c-0.134,0.189-0.392,0.99-0.392,3.992    v4.875c0,1.892-1.533,3.424-3.424,3.424h-2.354c-1.892,0-3.425-1.532-3.425-3.424V97.649c0-1.892,1.533-3.423,3.425-3.423h38.176    c1.892,0,3.424,1.531,3.424,3.423V112.248L327.248,112.248z M375.394,144.208c0,1.892-1.532,3.423-3.425,3.423h-37.847    c-1.892,0-3.424-1.531-3.424-3.423v-1.862c0-1.891,1.532-3.424,3.424-3.424h4.791v-35.984h-4.791    c-1.892,0-3.424-1.533-3.424-3.424v-1.862c0-1.892,1.532-3.423,3.424-3.423h36.286c1.891,0,3.424,1.531,3.424,3.423v11.557    c0,1.891-1.533,3.423-3.424,3.423h-2.356c-1.891,0-3.423-1.532-3.423-3.423v-0.767c0-2.937-0.159-4.625-0.477-5.021    c-0.089-0.073-0.755-0.482-4.205-0.482h-11.831v11.419h7.205c0.296-1.589,1.689-2.792,3.366-2.792h2.354    c1.892,0,3.424,1.532,3.424,3.424v8.27c0,1.891-1.532,3.423-3.424,3.423h-2.354c-1.892,0-3.425-1.532-3.425-3.423v-0.191h-7.146    v15.854h13.309c4.767,0,4.767,0,4.767-7.805v-0.191c0-1.892,1.532-3.424,3.424-3.424h2.354c1.893,0,3.425,1.532,3.425,3.424    V144.208z" fill="#000000" data-original="#000000" style="" class=""/>
						</g>
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					<g xmlns="http://www.w3.org/2000/svg">
					</g>
					</g></svg>';

			$donate_6 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512.019 512.019" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m296.01 0c-78.851 0-143 64.149-143 143s64.149 143 143 143 143-64.149 143-143-64.15-143-143-143zm15.019 208.011v3.139c0 8.284-6.716 15-15 15s-15-6.716-15-15v-1.443c-6.916-1.211-13.231-3.797-21.205-9.016-6.932-4.537-8.873-13.834-4.336-20.766 4.538-6.933 13.833-8.872 20.766-4.336 7.3 4.778 9.673 5.145 19.675 5.081 9.648-.063 13.493-7.633 14.244-12.097.675-4.01-.081-9.342-7.517-11.973-11.416-4.04-24.862-9.169-34.272-16.547-20.657-16.196-14.317-53.078 12.646-62.884v-2.169c0-8.284 6.716-15 15-15s15 6.716 15 15v1.234c9.938 2.929 16.888 9.116 16.888 9.116 6.053 5.604 6.451 15.05.872 21.139-5.586 6.096-15.047 6.519-21.156.956-3.87-2.866-9.769-4.103-15.982-2.22-4.024 1.213-5.098 5.359-5.332 6.601-.486 2.587.206 4.329.576 4.619 6.106 4.789 18.294 9.229 25.769 11.874 39.526 13.983 34.704 66.558-1.636 79.692z" fill="#000000" data-original="#000000" style="" class=""/><path d="m433.58 292.15-145.65 42.9c4.61 11.28 7.08 23.56 7.08 36.27v5.27c0 37.371-38.608 62.232-72.6 46.94l-76.35-34.36c-7.55-3.4-10.92-12.28-7.52-19.83 3.4-7.56 12.28-10.93 19.83-7.53l76.35 34.36c14.112 6.358 30.29-3.861 30.29-19.58v-5.27c0-25.776-15.612-48.545-38.697-58.933l-65.973-29.687c-25.68-11.56-55.08-11.42-80.57.35l-70.97 32.3c-5.35 2.43-8.79 7.77-8.79 13.65v159.618c0 11.281 10.769 18.035 20.34 14.402l99.88-38.05 118.8 41.58c27.009 9.451 56.679 6.588 81.42-8.08l161.61-95.17c18.47-10.95 29.95-31.09 29.95-52.57 0-40.648-39.056-70.185-78.43-58.58z" fill="#000000" data-original="#000000" style="" class=""/></g></g></svg>';

        ?>
            <div class="wrap">
                <div class="chdntwc_ratesup_notice_main">
	                <div class="chdntwc_rateus_notice">
	                    <div class="chdntwc_rtusnoti_left">
	                        <h3>Rate Us</h3>
	                        <label>If you like our plugin, </label>
	                        <a target="_blank" href="#">
	                            <label>Please vote us</label>
	                        </a>
	                        <label>, so we can contribute more features for you.</label>
	                    </div>
	                    <div class="chdntwc_rtusnoti_right">
	                        <img src="<?php echo CHDNTWC_PLUGIN_DIR; ?>/images/review.png" class="chdntwc_review_icon">
	                    </div>
	                </div>
	                <div class="chdntwc_support_notice">
	                    <div class="chdntwc_rtusnoti_left">
	                        <h3>Having Issues?</h3>
	                        <label>You can contact us at</label>
	                        <a target="_blank" href="https://www.xeeshop.com/support-us/?utm_source=aj_plugin&utm_medium=plugin_support&utm_campaign=aj_support&utm_content=aj_wordpress">
	                            <label>Our Support Forum</label>
	                        </a>
	                    </div>
	                    <div class="chdntwc_rtusnoti_right">
	                        <img src="<?php echo CHDNTWC_PLUGIN_DIR; ?>/images/support.png" class="chdntwc_review_icon">
	                    </div>
	                </div>
	            </div>
	            <div class="chdntwc_donate_main">
	               <img src="<?php echo CHDNTWC_PLUGIN_DIR; ?>/images/coffee.svg">
	               <h3>Buy me a Coffee !</h3>
	               <p>If you like this plugin, buy me a coffee and help support this plugin !</p>
	               <div class="chdntwc_donate_form">
	                  <a class="button button-primary chdntwc_donate_btn" href="https://www.paypal.com/paypalme/shayona163/" data-link="https://www.paypal.com/paypalme/shayona163/" target="_blank">Buy me a coffee !</a>
	               </div>
	            </div>


                <div class="wrap chdntwc-container">
                    <form method="post">
                        <?php wp_nonce_field( 'chdntwc_nonce_action', 'chdntwc_nonce_field' ); ?>

                        <ul class="chdntwc-tabs">
                            <li class="chdntwc-tab-link chdntwc-current" data-tab="chdntwc-tab-general">
                                <?php echo __( 'General Settings', 'charity-donation-for-woocommerce' ); ?>
                            </li>
                            <li class="chdntwc-tab-link" data-tab="chdntwc-tab-form">
                                <?php echo __( 'Donation Form Settings', 'charity-donation-for-woocommerce' ); ?>
                            </li>
                            <li class="chdntwc-tab-link" data-tab="chdntwc-tab-popup">
                                <?php echo __( 'Popup Settings', 'charity-donation-for-woocommerce' ); ?>
                            </li>
                            <li class="chdntwc-tab-link" data-tab="chdntwc-tab-collection">
                                <?php echo __( 'Donation Collected Settings', 'charity-donation-for-woocommerce' ); ?>
                            </li>
                        </ul>


                        <div id="chdntwc-tab-general" class="chdntwc-tab-content chdntwc-current">
                            <h3 class="chdntwc-head"><?php echo __( 'General Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Select Donation Product', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <?php $chdntwc_donation_product = get_option( 'chdntwc_donation_product' ); ?>
                                            <select name="chdntwc_donation_product" class="regular-text">
                                                <?php
                                                $args = array( 'post_type' => 'product');
                                                $loop = new WP_Query( $args );

                                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                                    <option value="<?php echo $loop->post->ID; ?>" <?php if($loop->post->ID == $chdntwc_donation_product) { echo 'selected'; } ?>><?php echo the_title().' ('.$loop->post->ID.')'; ?></option>
                                                <?php endwhile; wp_reset_query();

                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Minimum Donation Amount', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="number" class="regular-text" name="chdntwc_comman[chdntwc_dntpp_min_donation]" step="any" min="0" value="<?php echo $chdntwc_comman['chdntwc_dntpp_min_donation']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Maximum Donation Amount', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="number" class="regular-text" name="chdntwc_comman[chdntwc_dntpp_max_donation]" step="any" min="0" value="<?php echo $chdntwc_comman['chdntwc_dntpp_max_donation']; ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="chdntwc-head"><?php echo __( 'Cart Page Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Show Donation Form in Cart Page', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="checkbox" name="chdntwc_comman[chdntwc_shw_dntform_cart]" value="yes" <?php if($chdntwc_comman['chdntwc_shw_dntform_cart'] == 'yes') { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Display Type', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="radio" class="chdntwc_shw_dntform_cart_distype" name="chdntwc_shw_dntform_cart_distype" value="form" checked>
				                     		<label class="chdntwc_radio_label"><?php echo __( 'Donation Form', 'charity-donation-for-woocommerce' );?></label>
				                     		<input type="radio" class="chdntwc_shw_dntform_cart_distype" name="chdntwc_shw_dntform_cart_distype" value="popup" disabled>
				                     		<label class="chdntwc_radio_label"><?php echo __( 'Donation Popup', 'charity-donation-for-woocommerce' );?></label>
				                     		<label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Display Location', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <div class="chdntwc_crtform_div">
	                                            <select name="chdntwc_comman[chdntwc_shw_dntform_cart_disloctn_fm]" class="regular-text">
	                                            	<option value="wc_prcd_to_ckout" <?php if($chdntwc_comman['chdntwc_shw_dntform_cart_disloctn_fm'] == 'wc_prcd_to_ckout') { echo 'selected'; } ?>><?php echo __( 'Before Proceed to Checkout', 'charity-donation-for-woocommerce' );?></option>
	                                            	<option value="wc_aftr_cart_table" <?php if($chdntwc_comman['chdntwc_shw_dntform_cart_disloctn_fm'] == 'wc_aftr_cart_table') { echo 'selected'; } ?>><?php echo __( 'After Cart Table', 'charity-donation-for-woocommerce' );?></option>
	                                            	<option value="wc_bfr_cart_totals" <?php if($chdntwc_comman['chdntwc_shw_dntform_cart_disloctn_fm'] == 'wc_bfr_cart_totals') { echo 'selected'; } ?>><?php echo __( 'Before Cart Totals', 'charity-donation-for-woocommerce' );?></option>
	                                            	<option value="wc_aftr_cart_totals" <?php if($chdntwc_comman['chdntwc_shw_dntform_cart_disloctn_fm'] == 'wc_aftr_cart_totals') { echo 'selected'; } ?>><?php echo __( 'After Cart Totals', 'charity-donation-for-woocommerce' );?></option>
	                                            </select>
	                                        </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="chdntwc-head"><?php echo __( 'Checkout Page Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Show Donation Form in Checkout Page', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="checkbox" name="chdntwc_comman[chdntwc_shw_dntform_ckout]" value="yes" <?php if($chdntwc_comman['chdntwc_shw_dntform_ckout'] == 'yes') { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Display Type', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">                                            
                                            <input type="radio" class="chdntwc_shw_dntform_ckout_distype" name="chdntwc_shw_dntform_ckout_distype" value="form" checked>
                                            <label class="chdntwc_radio_label"><?php echo __( 'Donation Form', 'charity-donation-for-woocommerce' );?></label>
                                            <input type="radio" class="chdntwc_shw_dntform_ckout_distype" name="chdntwc_shw_dntform_ckout_distype" value="popup" disabled>
                                            <label class="chdntwc_radio_label"><?php echo __( 'Donation Popup', 'charity-donation-for-woocommerce' );?></label>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Display Location', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <div class="chdntwc_cktform_div">
                                                <select name="chdntwc_comman[chdntwc_shw_dntform_ckout_disloctn_fm]" class="regular-text">
                                                    <option value="wc_bfr_ckout_form" <?php if($chdntwc_comman['chdntwc_shw_dntform_ckout_disloctn_fm'] == 'wc_bfr_ckout_form') { echo 'selected'; } ?>><?php echo __( 'Before Checkout Form', 'charity-donation-for-woocommerce' );?></option>
                                                    <option value="wc_after_ckout_form" <?php if($chdntwc_comman['chdntwc_shw_dntform_ckout_disloctn_fm'] == 'wc_after_ckout_form') { echo 'selected'; } ?>><?php echo __( 'After Checkout Form', 'charity-donation-for-woocommerce' );?></option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="chdntwc-head"><?php echo __( 'Donations Shortcode', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                	<tr valign="top">
                                        <td class="forminp forminp-text chdntwc-shrtcd">
                                            <label>Use shortcode <strong>[chdntwc-donation-form]</strong> to add donations form anywhere in website to get Donations popup button instead of form.</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="chdntwc-tab-form" class="chdntwc-tab-content">
                        	<h3 class="chdntwc-head"><?php echo __( 'Donation Form Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Make a Donation Label Text', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_dntform_dnt_label]" value="<?php echo $chdntwc_comman['chdntwc_dntform_dnt_label']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Enable Additional Note', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="checkbox" name="chdntwc_comman[chdntwc_dntform_addnote_enable]" value="yes" <?php if($chdntwc_comman['chdntwc_dntform_addnote_enable'] == 'yes') { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Additional Note Label Text', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_dntform_addnote_label]" value="<?php echo $chdntwc_comman['chdntwc_dntform_addnote_label']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Response When Donation Amount Empty', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_dntamnt_empty_text]" value="<?php echo $chdntwc_comman['chdntwc_dntamnt_empty_text']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Response When Donation Amount is Less than Minimum Allowed Amount', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_dntamnt_lesmin_text" value="Minimum Donation Amount is {min_donation}." disabled>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                            <span class="description hdntwc_fullwidth">Use tag <strong>{min_donation}</strong> to get minimum allowed donation amount in response.</span>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Response When Donation Amount is Greater than Maximum Allowed Amount', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_dntamnt_grtrmax_text" value="Maximum Donation Amount is {max_donation}." disabled>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                            <span class="description hdntwc_fullwidth">Use tag <strong>{max_donation}</strong> to get maximum allowed donation amount in response.</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="chdntwc-head"><?php echo __( 'Predefined Donation Amounts Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Show Predefined Donation Amounts', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="checkbox" name="chdntwc_comman[chdntwc_prdfn_dnt_show]" value="yes" <?php if($chdntwc_comman['chdntwc_prdfn_dnt_show'] == 'yes') { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Predefined Donation Amounts', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_prdfn_dnt_amnts]" value="<?php echo $chdntwc_comman['chdntwc_prdfn_dnt_amnts']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Predefined Donation Amounts Label Text Color', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" name="chdntwc_comman[chdntwc_prdfn_dnt_lbl_txt_clr]" class="chdntwc_colorpicker" value="<?php echo $chdntwc_comman['chdntwc_prdfn_dnt_lbl_txt_clr']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Predefined Donation Amounts Label Background Color', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" name="chdntwc_comman[chdntwc_prdfn_dnt_lbl_bg_clr]" class="chdntwc_colorpicker" value="<?php echo $chdntwc_comman['chdntwc_prdfn_dnt_lbl_bg_clr']; ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="chdntwc-head"><?php echo __( 'Add Donation Button Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Text', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_adddntbtn_txt]" value="<?php echo $chdntwc_comman['chdntwc_adddntbtn_txt']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Text Font Size', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="number" class="regular-text" name="chdntwc_comman[chdntwc_adddntbtn_txt_fnt_size]" value="<?php echo $chdntwc_comman['chdntwc_adddntbtn_txt_fnt_size']; ?>">
                                            <span class="description">(font size in px, just enter number eg. 18)</span>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Text Color', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" name="chdntwc_comman[chdntwc_adddntbtn_txt_clr]" class="chdntwc_colorpicker" value="<?php echo $chdntwc_comman['chdntwc_adddntbtn_txt_clr']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Background Color', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" name="chdntwc_comman[chdntwc_adddntbtn_bg_clr]" class="chdntwc_colorpicker" value="<?php echo $chdntwc_comman['chdntwc_adddntbtn_bg_clr']; ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="chdntwc-tab-popup" class="chdntwc-tab-content">
                        	<h3 class="chdntwc-head"><?php echo __( 'Popup Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                	<tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Icon Enable?', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="checkbox" name="chdntwc_dntpp_btn_icn_enbl" value="yes" disabled>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                        </td>
                                    </tr>
                                	<tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Popup Button Icon', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="radio" name="chdntwc_dntpp_btn_icn" value="donate_1" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_1; ?></label>
                                            <input type="radio" name="chdntwc_dntpp_btn_icn" value="donate_2" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_2; ?></label>
                                            <input type="radio" name="chdntwc_dntpp_btn_icn" value="donate_3" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_3; ?></label>
                                            <input type="radio" name="chdntwc_dntpp_btn_icn" value="donate_4" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_4; ?></label>
                                            <input type="radio" name="chdntwc_dntpp_btn_icn" value="donate_5" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_5; ?></label>
                                            <input type="radio" name="chdntwc_dntpp_btn_icn" value="donate_6" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_6; ?></label>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Popup Button Text', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_dntpp_btn_txt" value="Donate Us" disabled>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Popup Button Text Font Size', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="number" class="regular-text" name="chdntwc_dntpp_txt_fnt_size" value="18" disabled>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                            <span class="description">(font size in px, just enter number eg. 18)</span>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Popup Button Text Color', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                        	<span style="opacity: .6; pointer-events: none;">
                                            	<input type="text" name="chdntwc_dntpp_txt_clr" class="chdntwc_colorpicker" value="" disabled>
                                        	</span>
                                    		<label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Popup Button Background Color', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                        	<span style="opacity: .6; pointer-events: none;">
                                            	<input type="text" name="chdntwc_dntpp_bg_clr" class="chdntwc_colorpicker" value="" disabled>
											</span>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Popup Heading Text', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_dntpp_head_txt]" value="<?php echo $chdntwc_comman['chdntwc_dntpp_head_txt']; ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="chdntwc-head"><?php echo __( 'Fixed Donate Us Popup Button Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Fixed Donate Us Popup Button at Bottom Right Corner', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="checkbox" name="chdntwc_comman[chdntwc_shw_dntpp_fxdbtn_ftr]" value="yes" <?php if($chdntwc_comman['chdntwc_shw_dntpp_fxdbtn_ftr'] == 'yes') { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Icon Enable?', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="checkbox" name="chdntwc_comman[chdntwc_fxddntpp_btn_icn_enbl]" value="yes" <?php if($chdntwc_comman['chdntwc_fxddntpp_btn_icn_enbl'] == 'yes') { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Icon', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="radio" name="chdntwc_fxddntpp_btn_icn" value="donate_1" checked>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_1; ?></label>
                                            <input type="radio" name="chdntwc_fxddntpp_btn_icn" value="donate_2" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_2; ?></label>
                                            <input type="radio" name="chdntwc_fxddntpp_btn_icn" value="donate_3" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_3; ?></label>
                                            <input type="radio" name="chdntwc_fxddntpp_btn_icn" value="donate_4" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_4; ?></label>
                                            <input type="radio" name="chdntwc_fxddntpp_btn_icn" value="donate_5" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_5; ?></label>
                                            <input type="radio" name="chdntwc_fxddntpp_btn_icn" value="donate_6" disabled>
                                            <label class="chdntwc_rdicon_lbl"><?php echo $donate_6; ?></label>
                                            <label class="chdntwc_pro_link"><?php echo __( 'Only available in pro version ', 'charity-donation-for-woocommerce' );?><a href="https://www.xeeshop.com/product/charity-donation-for-woocommerce-pro/" target="_blank"><?php echo __( 'link', 'charity-donation-for-woocommerce' );?></a></label>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Text', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_fxddntpp_btn_txt]" value="<?php echo $chdntwc_comman['chdntwc_fxddntpp_btn_txt']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Text Font Size', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="number" class="regular-text" name="chdntwc_comman[chdntwc_fxddntpp_txt_fnt_size]" value="<?php echo $chdntwc_comman['chdntwc_fxddntpp_txt_fnt_size']; ?>">
                                            <span class="description">(font size in px, just enter number eg. 18)</span>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Text Color', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" name="chdntwc_comman[chdntwc_fxddntpp_txt_clr]" class="chdntwc_colorpicker" value="<?php echo $chdntwc_comman['chdntwc_fxddntpp_txt_clr']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Button Background Color', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" name="chdntwc_comman[chdntwc_fxddntpp_bg_clr]" class="chdntwc_colorpicker" value="<?php echo $chdntwc_comman['chdntwc_fxddntpp_bg_clr']; ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="chdntwc-tab-collection" class="chdntwc-tab-content">
                        	<h3 class="chdntwc-head"><?php echo __( 'Donations Collected Settings', 'charity-donation-for-woocommerce' );?></h3>
                            <table class="form-table chdntwc-table">
                                <tbody>
                                	<tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Show Donation Collected Amount', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="checkbox" name="chdntwc_comman[chdntwc_dntclclctd_amount_show]" value="yes" <?php if($chdntwc_comman['chdntwc_dntclclctd_amount_show'] == 'yes') { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Heading Text', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_dntclctn_head_text]" value="<?php echo $chdntwc_comman['chdntwc_dntclctn_head_text']; ?>">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <th scope="row">
                                            <label><?php echo __( 'Second Text', 'charity-donation-for-woocommerce' );?></label>
                                        </th>
                                        <td class="forminp forminp-text">
                                            <input type="text" class="regular-text" name="chdntwc_comman[chdntwc_dntclctn_sec_text]" value="<?php echo $chdntwc_comman['chdntwc_dntclctn_sec_text']; ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="action" value="chdntwc_save_option">
                        <input type="submit" value="Save Changes" name="submit" class="chdntwc_savebtn button-primary">
                    </form>
                </div>
            </div>
        <?php
        }

   
        function CHDNTWC_save_options() {
            if( current_user_can('administrator') ) {
                if(isset( $_REQUEST['action'] ) && $_REQUEST['action'] == 'chdntwc_save_option') {
                    if(!isset( $_POST['chdntwc_nonce_field'] ) || !wp_verify_nonce( $_POST['chdntwc_nonce_field'], 'chdntwc_nonce_action' ) ) {
                        print 'Sorry, your nonce did not verify.';
                        exit;
                    } else {

                    	$isecheckbox = array(
                    		'chdntwc_shw_dntform_cart',
                    		'chdntwc_shw_dntform_ckout',
                    		'chdntwc_dntform_addnote_enable',
                    		'chdntwc_prdfn_dnt_show',
                    		'chdntwc_shw_dntpp_fxdbtn_ftr',
                    		'chdntwc_fxddntpp_btn_icn_enbl',
                    		'chdntwc_dntclclctd_amount_show',

	                    );

	                    foreach ($isecheckbox as $key_isecheckbox => $value_isecheckbox) {
	                        if(!isset($_REQUEST['chdntwc_comman'][$value_isecheckbox])){
	                            $_REQUEST['chdntwc_comman'][$value_isecheckbox] ='no';
	                        }
	                    }

                        update_option('chdntwc_donation_product', sanitize_text_field( $_REQUEST['chdntwc_donation_product'] ), 'yes');
	                    

	                    //print_r($_REQUEST);
	                    foreach ($_REQUEST['chdntwc_comman'] as $key_chdntwc_comman => $value_chdntwc_comman) {
	                       // echo $key_chdntwc_comman;
	                        update_option($key_chdntwc_comman, sanitize_text_field($value_chdntwc_comman), 'yes');
	                    }

		                wp_redirect( admin_url( '/admin.php?page=chdntwc-donation-page' ) );
		                exit;
                    }
                }
            }
        }


        function init() {
            add_action( 'admin_menu',  array($this, 'CHDNTWC_options_page'));
            add_action( 'init',  array($this, 'CHDNTWC_save_options'));
        }


        public static function CHDNTWC_instance() {
            if (!isset(self::$CHDNTWC_instance)) {
                self::$CHDNTWC_instance = new self();
                self::$CHDNTWC_instance->init();
            }
            return self::$CHDNTWC_instance;
        }
    }
    CHDNTWC_admin::CHDNTWC_instance();
}