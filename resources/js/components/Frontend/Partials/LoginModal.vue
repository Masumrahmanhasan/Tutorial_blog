<template>
	<!-- Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="loginModalTitle">Sign in For more</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="">
					<div class="modal-body">
						
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="text" name="password" class="form-control">
							</div>
						
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</template>
<script>
export default {

}
</script>

<style>
.modal-content{
	width: 400px !important;
	left: 8%;
}
	.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 1rem);
}

.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  content: "";
}

</style>