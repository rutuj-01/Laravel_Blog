<template>
	<div>

		<chat-message v-for="message in messages" :msg="message"></chat-message>
		}
	</div>
</template>

<script>
	export default{
		data(){
			return {
				messages:[
				{
					message: "HEY !",
					user:"JOHN DOE"
				},
				{
					message: "HELLO !!",
					user:"JOHN DOE"
				}
				]				
			}
		}
	}
</script>