<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Artist Registration</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

<style>
	
.line {
    border: 0.9px dashed #000000;
	margin-left: 40px;
	margin-right: 40px;
	height: 0px;
}
.art{
	padding: 60px;
	background-color: #ebeef9;
	margin: 60px;
}
.your_details{
	padding: 60px;
	/* background-color: #eefaf0; */
	background-color: #f4f2f7;
	margin: 60px;
}

.label {
    padding: 10px;
    display: flex;
    flex-wrap: wrap;
	gap: 15px;
        }

.label label {
    margin-bottom: 8px;
    padding-right: 10px; /* Adjust as needed */
}

.label input{
    flex: 2;
    width: calc(50% - 10px); /* Adjust as needed */
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 16px;
	height: 40px;
}
.label textarea{
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 16px;
}

.upload-section {
    margin-top: 20px;
	padding: 60px;
	background-color: #ebeef9;
	margin: 60px;
}

.add-more-btn {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
	border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

.add-more-btn:hover {
    background-color: #45a049;
}
.terms{
	text-align: center;
	padding-bottom: 40px;
	
}
.login-link{
	text-align: center;
}
button {
    background-color: #2285d2;
	color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
.button{
	text-align: center;
}
@media (max-width: 768px) {
            .label input,
            .label textarea {
                width: 100%;
            }
        }
	</style>
</head>
<body>
	<h2 style="text-align: center;font-size: 2.244em;font-family: math;font-weight: 400;color: rgb(31, 10, 166);">ARTIST REGISTRATION</h2>
	<div class="line"></div>
	
	<form action="{{ route('artist.register.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="art">
			<h3>ARTIST INSIGHTS</h3>
		<label>
			Are you an independent artist selling your own artwork?
			<input type="radio" name="independent_artist" value="1" required> Yes
			<input type="radio" name="independent_artist" value="0" required> No
		</label><br><br>
	
		<label>
			Are you a full time professional artist?
			<input type="radio" name="gallery_representative" value="1" required> Yes
			<input type="radio" name="gallery_representative" value="0" required> No
		</label><br><br>
	
		<label>
			Have you received any awards or recognitions for your artwork?
			<input type="radio" name="sell_original_artworks" value="1" required> Yes
			<input type="radio" name="sell_original_artworks" value="0" required> No
		</label><br><br>
	
		<label>
			Are you interested in collaborating with other artists on joint projects?
			<input type="radio" name="sell_digital_creations" value="1" required> Yes
			<input type="radio" name="sell_digital_creations" value="0" required> No
		</label><br><br>
		</div>
		<div class="your_details">
			<h3>YOUR DETAILS</h3>
			<div class="label">
			<label>
				Name:
			</label>
			&nbsp;&nbsp;<input type="text" id="firstname" name="firstname" required>
			<br><br>
			</div>
			<div class="label">
			<label>
				User Name:
			</label>
			<input type="text" id="username" name="username" required><br><br>
			</div>
			<div class="label">
			<label>
				 Email:
			</label>
			<input type="email" id="email" name="email" required>
			<label>
				Phone Number:
			</label>
			<input type="tel" id="phonenumber" name="phonenumber" required><br><br>
			</div>
			<div class="label">
			<label>
				Password:
			</label>
			<input type="password" id="password" name="password" required>
			<label>
				Re-type Password:
			</label>
			<input type="password" id="confirm_password" name="confirm_password" required><br><br>
			</div>
			<div class="label">
			<label>
				City:
			</label>
			<input type="text" id="city" name="city" required>
			<label>
				Country:
			</label>
			<input type="text" id="country" name="country" required><br><br><br><br>
			</div>
			<div class="line"></div><br><br><br>
			<div class="label">
			<label for="profile_picture">
				Choose a profile picture
			</label>
    		<input type="file" id="profile_picture" name="profile_picture" accept="image/*" required><br><br>
			
			</div>
			<div class="label">
				<label>
					Portfolio:
				</label>
				<input type="text" id="portfolio" name="portfolio"><br><br>
				<label>
					Social Media Link:
				</label>
				<input type="text" id="socialmedia" name="socialmedia"><br><br>
				<div class="input-field" style="display: none;">
                    <label>Type:</label>
                    <input type="number" placeholder="Creator" name="type" id="type" value="2">
                </div>
			</div>

			<div class="label">
			<label>
				Artist Biography
			</label>
			<textarea id="bio" name="bio" rows="6" cols="145" placeholder="Write a little about yourself..." required></textarea>
			<label>
				Artistic Aspirations
			</label>
			<textarea id="artistic_aspirations" name="artistic_aspirations" rows="6" cols="145" placeholder="e.g. Gaining recognition, Selling artworks, Collaborations, etc..."></textarea>
			<label>
				Artist Quote
			</label>
			<textarea id="artist_quote" name="artist_quote" rows="6"cols="145" placeholder=" This may be added to your profile and/or promotional activities..."></textarea><br>
			</div>
		</div>

		<div class="upload-section">
			<h3>UPLOAD SAMPLES OF YOUR ART</h3>
			<label for="art_samples">Choose art samples:</label>
				<input type="file" id="art_samples" name="art_samples[]" accept="image/*" multiple required><br>
				<button class="add-more-btn" type="button" onclick="addArtworkInput()">Add more artwork</button>
			</div>
			<div class="terms">
                <label>
                  <input type="checkbox" id="agree_terms" name="agree_terms" required>
                  <a href="{{ url('/terms.html') }}" id="open_terms" target="_blank">I agree to the terms and conditions</a>
                </label>
              </div>

			<div class="button"><button type="submit" >Submit</button></div>
			<div class="login-link">
				<p>Already have an account? <a href="{{ route('artist.login') }}">Login here</a></p>
			</div>
	</form>

	<script>
		function addArtworkInput() {
			var uploadSection = document.querySelector('.upload-section');
			var newInput = document.createElement('input');
			newInput.type = 'file';
			newInput.name = 'art_samples[]';
			newInput.accept = 'image/*';
			newInput.multiple = true;
			newInput.required = true;
			uploadSection.insertBefore(newInput, document.querySelector('.add-more-btn'));
		}

	</script>
</body>
</html>