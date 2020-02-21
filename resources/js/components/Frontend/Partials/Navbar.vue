<template>
    <div>
        <header>
		<div class="container position-relative no-side-padding">

			<a href="#" class="logo"><img src="/frontend/images/mylogo.png" alt="Logo Image"></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Features</a></li>
				<li><a href="#" @click="loginModal">Login</a></li>
				<li><a href="#">Register</a></li>
			</ul><!-- main-menu -->

			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" type="text" placeholder="Search Tutorials">
				</form>
			</div>
		</div><!-- conatiner -->
	</header>
    </div>
</template>

<script>
	export default {
		data(){
			return {

			}
		},
		methods: {
			
		}
	}
</script>
<style>
</style>