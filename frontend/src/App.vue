<template>
	<v-app>
		<v-app-bar app>
			Header
		</v-app-bar>
		<v-navigation-drawer app>
			Side Menu
		</v-navigation-drawer>
		<v-content>
			<v-container fluid>
				<!-- jika menggunakan vue-router -->
				<router-view></router-view>
			</v-container>
		</v-content>
		<v-footer app>
			Footer
		</v-footer>
	</v-app>
</template>
<script>
	export default {
		name: 'App'
	}
</script>