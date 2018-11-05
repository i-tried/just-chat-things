<html>
<head>
	<link rel="stylesheet" href="stylesheet.css">
</head>
	<body>

<!--######################################################################-->

		<?php
		#Initializez all php code
			#Checks if input is present and prevents exploits of code
			$name = $email = $gender = $comment = $website = ""; 
			#define variables and set to empty string

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				#makes sure that comment fiield cant be exploited
				$comment = test_input($_POST["comment"]);
			}

			function test_input($data) { 
				#makes sure that the $data can't be exploited (html tags ect. removed)
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$comment = $comment. "<br> </div>";

			if(isset($_COOKIE['AnnikaUser'])){
				#saves cookie info and comment in var the <div> tags are for stilizing later in css
				$namencomm = "<div class='IndividualComment'><div class='userName'>" . $_COOKIE['AnnikaUser']. ":</div>" . $comment;
			}
			
			else{
				echo "400 Bad request";
			}

			$appendordelete = "a"; #used to have the option to delete content of newfile.html

			$myfile = fopen("newfile.html", $appendordelete) or die("Unable to open file!"); 
			fwrite($myfile, $namencomm); #adds chat comment to newfile
			fclose($myfile);
		?>

<!--######################################################################-->

		<div class="header">
			<h2>Chat Board</h2>
			<?php 
			#checks if cookie is set and gives user defined output
				if(isset($_COOKIE['AnnikaUser'])){
					$name = $_COOKIE['AnnikaUser'];
					echo "Welcome " . $name . "!";
				}
			
				else{
					echo "Welcome to our site!";
				}
			?>
		</div>

<!--######################################################################-->

		<div id="CommentFile">
			<h3>Comments:</h3>

			<div class="AllComments">
				<?php 
				$myfile = fopen("newfile.html", "r") or die("Unable to open file!");
				echo fread($myfile, filesize("newfile.html"));
				fclose($myfile);
				?>
			</div>
		</div>

<!--######################################################################-->

		<div class="Input">
			<form action = "<?php echo $_SERVER["PHP_SELF"] ?>" method = "post" >
				<br>Write your chat comment here:<br>
				<div align="center">
					<textarea name = "comment" rows="5" cols="100" placeholder="Write your comment!" style="outline: none;"></textarea>
				</div>
				<input type="submit" class="button" value="Submit"> <br>
				<a href="final_comm_set_name.php" title="Return" class="button">Return to Login</a>
			</form>
		</div>

<!--######################################################################-->

		<!--
		<button class="button" onclick="<?#php $appendordelete = 'w';?>" name="deleteButton">Delete Comments</button>
		<?php
		#origionally for being able to delete chat content - didnt work and open for further edits
		/*$myfile = fopen("newfile.html", $appendordelete) or die("Unable to open file!");
		fclose($myfile);*/
		?>-->

	</body>
</html>

<!--
HOW TO RUN THIS
#########################
To run this successfully enable php:
1. Go to terminal and typing cd Users/annika/Documents/where-file-is-located or cd ~/Documents
2. Then type in "php -S localhost:8000" in terminal
3. Go to "http://localhost:8000/filename" in safari and it works!!!
4. To stop php press "ctrl c" in terminal
#########################
for more info go to 
https://www.reddit.com/r/SublimeText/comments/20kffi/how_to_run_htmlphp_code_in_sublime_text/
-->