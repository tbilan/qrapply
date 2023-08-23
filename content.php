<div class="card o-hidden border-0 shadow-lg">
    <div class="card-body p-0">
        <div class="col-lg-7">
            <div class="p-5">
                <form class="user" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
					<div class="form-group mb-3">
						<textArea type="message" class="form-control form-control-user" id="message" name="message"
							placeholder="Enter Feedback Message" required></textArea>
					</div>
					<button type="submit" id="SubmitButton" name ="SubmitButton" class="btn btn-primary btn-user btn-block">
						Submit Feedback
					</button>
				</form>
        </div>
    </div>
</div>