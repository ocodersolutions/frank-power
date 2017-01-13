<?php require 'include/header.php';?>


<!----------------------------------- start banner ----------------------------------------------->

<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56198.71507744966!2d-0.17384273075408338!3d51.50118388617769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1483813492205" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	<div class="container">
	<div class="map-position">
		<div class="product-search container">
		<form name="product-search" value="" action="#">
			<div class="col-sm-7">
				<input type="text" name="find" value="" placeholder="19 Riedel St. Fort McMurray, AB T9H5P8">
			</div>
			<div class="col-sm-3">
				<select >
				  <option value="Product Of Choice">Product Of Choice</option>
				  <option value="Choice1">Choice1</option>
				  <option value="Choice2">Choice2</option>			  
				</select>
			</div>
			<div class="col-sm-2">
				<button type="submit" class="bk-main-fill small-btn col-sm-2" value="FIND" style="border-radius:0px;"><i class="fa fa-search" aria-hidden="true"></i>FIND</button>
			</div>
		
		</form>
		</div>
		
		<div class="area mt2">
			<label class="area-title">Installer in your area</label>
			<p><span>Bell - 0.2 km</span><br>Clearwater Landing<br>
											19 Riedel St.<br>
											Fort McMurray, AB T9H5P8</br>
											9876543210<br>
			</p>
			<form name="area" action="#">
				<select class="mb2">
				  <option value="Cities">Cities</option>
				  <option value="Cities1">Cities1</option>
				  <option value="Cities2">Cities2</option>			  
				</select>
				<input type="text" value="" name="pcode"  placeholder="Postal Code" class="mb2">
				<textarea name="description" value="" placeholder="Description" class="mb1" ></textarea>
				<input type="submit" name="send" value="SEND" class=" main-fill  small-btn" style="background:#be5b0b;border-radius:0px;">
			</form>
		</div>
	</div>
</div>
<?php require 'include/footer.php';?>