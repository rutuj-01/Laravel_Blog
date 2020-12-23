<template>
	
    <div class="container">
		<form action="" method="post">
			<label>Title</label>
			<div class="form-group">
				<input type="text" name="title" >
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="description" rows="3"></textarea>
			</div>
			<input type="submit" name="submit">
		</form>
	</div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>