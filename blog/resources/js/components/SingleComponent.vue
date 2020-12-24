<template>	
	<div>
		<div class="card">
            <div class="card-body">
                <div class="card-header" style="font-size: 20px">Title</div>
                 <div class="card-text" ><label>Author: </label>  </div>
                 <div class="card-text" style="font-size: 15px">DEsc</div>
            </div>
                       
        </div> 

	</div>
</template>

<script>
	export default{
		data(): {
			return{
				post_data:[]
			}
		},
		methods:{

			fetch(){
				axios.get('post/getAll')
				.then(res=>{
					console.log(res)
				})
				.catch(err => {
					console.log(err)
				})
			}

		}
	
</script>