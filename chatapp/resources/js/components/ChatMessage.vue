<template>
	<div>
		<p> {{ msg.message }}</p>
		<p>{{ msg.user }}</p>
		<hr>
	</div>
</template>

<script>
	export default{
		props:['msg']
	}	
</script>