<template>
        <div class="modal fade show" id="m_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title btns m--font-primary" id="exampleModalLongTitle" style="font-size:18px;font-weight:700">
											Revert Balance
										</h3>
										<span   data-dismiss="modal">
											X
										</span>
									</div>
									<div class="modal-body">
										
										
										<div class="row d-flex justify-content-center">

											<div class="btn-group btn-group-toggle" data-toggle="buttons">
											  <label class="btn btn-brand active btns">
											    <input type="radio" name="options" id="option1" autocomplete="off" checked>Bus API
											  </label>
											  <label class="btn btn-brand btns">
											    <input type="radio" name="options" id="option2" autocomplete="off"> Money Transfer API
											  </label>
											  <label class="btn btn-brand btns">
											    <input type="radio" name="options" id="option3" autocomplete="off"> API 3
											  </label>
											  <label class="btn btn-brand btns">
											    <input type="radio" name="options" id="option3" autocomplete="off"> API 4
											  </label>
											</div>


										</div>
										<div class="row mt-5">
											<div class="col-lg-4 mt-2 btns size">Enter the Amount:</div>
											<div class="col-lg-8">
											<div class="input-group ">
										        <div class="input-group-prepend ">
										            <span class="input-group-text btns" style="background-color:#5867dd;color:white">&nbsp;&#8377;&nbsp;</span>
										        </div>
										        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
										        <div class="input-group-append">
										            <span class="input-group-text" style="background-color:#5867dd;color:white">.00</span>
										        </div>
										    </div>
										</div>
										</div>

											<div class="row mt-5">
											<div class="col-lg-4 mt-2 btns size">Enter Password:</div>
											<div class="col-lg-8">
											<div class="input-group ">
										        
										        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
										        
										    </div>
										</div>
										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary btns" data-dismiss="modal">
											Close
										</button>
										<button type="button" class="btn btn-primary btns">
											Save changes
										</button>
									</div>
								</div>
							</div>
						</div>
</template>