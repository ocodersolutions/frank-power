<?php require 'include/header.php';?>
<div class="page_content">


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13940651.084857471!2d-104.7478563828105!3d64.75305065058342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53b00f5201b6604b%3A0x7cbffe9e3b1508e5!2s19+Riedel+St%2C+Fort+McMurray%2C+AB+T9H%2C+Ca-na-%C4%91a!5e0!3m2!1svi!2s!4v1484363854191" width="100%" height="960" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="container" id="center_content">
	
	<div class="row mt6 mb6">

		<form action="" class="choose_address" id="choose_address">
			<input type="text" class="input_address border_style" placeholder="Enter your Address"/>
			<select name="choiceProduce" id="choiceProduce" class="border_style">
				<option value="">Produce Of Choice</option>
				<option value="Slow">Slow</option>
				<option selected="selected">Medium</option>
				<option>Fast</option>
				<option>Faster</option>
		    </select>
			<button type="submit" class="input_find border_style"><i class="fa fa-search"></i>Find</button>
		</form>

	</div>
	<div class="row ">
		<div class="col-md-4 install_area_box border_style">
			<p class="intall_area">Installer in your area</p>
			<div class="intall_area_head">
				<h4 class="area_info">Bell - 0.2 km</h5>
				<p>Clearwater Landing</p>
				<p>19 Riedel St.</p>
				<p>Fort McMurray,AB T9H5P8</p>
				<p>9876543210</p>
			</div>
			<form action="" class="install_area" id="install_area">
				<select name="choiceCites" id="choiceCites" class="border_style">
					<option value="">Cities</option>
					<option value="Slow">Slow</option>
					<option selected="selected">Medium</option>
					<option>Fast</option>
					<option>Faster</option>
			    </select>
			    <input type="text" class="input_postal border_style" placeholder="Postal Code">
			    <textarea class="input_des border_style" rows="5" id="comment" placeholder="Description"></textarea>
				<button type="submit" class="input_send border_style">Send</button>
			</form>

		</div>
	</div>
	
</div>	
</div>

<style>
	.page_content{
		position: relative;
		margin-top: 80px;
	}
	.gm-style .place-card-large{
		display: none!important;
	}
	#center_content{
		position: absolute;
		top: 0;
		left: 50%;
		transform: translateX(-50%);
	}
	.choose_address{
		padding: 15px;
		background-color: rgba(248, 247, 245, 0.75);
	}
	.choose_address select#choiceProduce{
		padding-left: 15px;
	}
	.input_address{
		padding: 10px 20px;
		width: calc(100% - 331px);
	}
	.input_find {
		color: #fff;
		font-weight: bold;
		text-align: center;
		padding: 15px 50px;
		background-color: #272323;
	}
	.input_find i{
		margin-right: 10px;
	}
	.border_style{
		border: 1px solid #be5b0b;
		height: 50px;
		margin-right: 5px;
		border-radius: 2px;
	}
	.border_style:focus{
		outline: 0;
	}
	.ui-widget.ui-widget-content{
		border: 1px solid #be5b0b!important;
	}
	.install_area_box.border_style{
		height: auto;
		background-color: #fff;	
	}
	#choiceCites,.input_postal,.input_des,.input_send{
		display: block;
		width: 100%;
		margin-bottom: 15px;
	}
	.input_send{
		background: #be5b0b;
		color: #fff;
		text-transform: uppercase;
		border-radius: 0;
	}
	.install_area_box .border_style{
		height: 40px;
		padding: 0 15px;
	}
	.install_area_box .input_des.border_style{
		height: auto;
	}
	.intall_area{
		text-align: center;
		background: #be5b0b;
		margin-left: -15px;
		margin-right: -15px;
		color: #fff;
		line-height: 50px;
	}
	.intall_area_head{
		margin-bottom: 15px;
	}
	h4.area_info{
		color: #be5b0b;
		font-weight: bold;
	}
	.intall_area_head p{
		margin: 0;
	}
</style>


<?php require 'include/footer.php';?>
