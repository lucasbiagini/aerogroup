<!DOCTYPE html>
<html>
<head>
	<title>Airport</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>


	<div id="app" class="container">
		<div class="col-xs-12">
		<div style="margin-bottom:50px;transition: all 1s ease-in-out;background-color: black;float:left" :class="{'col-xs-2': (which == 0), 'col-xs-10': (which == 0)}" >
			oi
		</div>
		<div style="margin-bottom:50px;transition: all 1s ease-in-out" :class="{'col-xs-2': (which == 1), 'col-xs-10': (which == 1)}">
			oi
		</div>
		</div>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>

	<script>
		$(document).ready(function(){
			var app = new Vue({
				el: '#app',
				created: function() {
					
					let self = this;
					self.which = self.getWhich();
				},
				data: {
					which: -1
				},
				mounted: function () {

				},
				methods: {
					getWhich: function() {
						let self = this;
						let url = '/which';
						axios.get(url)
							.then(function(response){
								return response.data;
							})
							.catch(function(error){
								console.log(error);
							});
					},
				},
				computed: {

				},
				watch: {
					
				}
			});
		});	
	</script>
</body>
</html>