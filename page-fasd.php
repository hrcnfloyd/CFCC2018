<?php
/*
Template Name: FASD
*/
?>
<?php get_header(); ?>  
<main role="main">
		<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		<div class="col col-12 bg-pos-cc page-banner" style="background-image: url(<?php header_image(); ?>);">
			<div class="container">
				<div class="row">
					<div class="col col-md-7 transparent p-4">
						<h1 class="text-white text-center text-md-left">Faculty &amp; Stasff Directory</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-4 pb-4">
			<div class="row">
				<div class="col-12 maincolumn">
					<style>
						/* single result styles */
					.name {font-size: 150%;}
					.title {}
					.phone {}
					.email {}

						/* multi-result table striping */
					.row0 {background-color: #eee;}
					.row1 {background-color: #FFF;}

						/* multi-result table styles */
					#results {margin: 10px 0px;}
					#results th {background-color: #005DAA; 
									 border-bottom: solid black 2px;}
					#results th,td{padding: 6px 4px 6px 4px;}

						.letterheader {background-color: #A4D7F4;padding: 10px;}

				</style>

				<a name="top"></a>
				<h1>Search the CFCC employee directory:</h1>
				<form action='http://cfcc.edu/fasd/' method=GET>
				<input type='text' name='term'>
				<input type='submit' value='Find'>
				</form>

				<?php
				$db = "empdirectory";
				$host = "localhost";
				$username = "empsearcher";
				$password = "cinq4empdir";
				$table = "employee_dir";
				$alphapagemin = "20"; #more than this num results gets alpha paged

				// The line below takes any spaces in the input and replaces them 
				// with % so multiword queries will work.
				$term = str_replace(' ','%',$_GET["term"]);
				try {
					$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

					$stmt = $conn->prepare("SELECT left(name,1) as letter, name, phone1, title, gmail FROM $table WHERE allfields like :term order by name");
					$stmt->execute(array(':term' => '%'.$term.'%'));

				  $result = $stmt->fetchAll();

				  // display the letter links at the top 
				  if (count($result) >= $alphapagemin ) {
						echo "<p>\n";
					foreach (range('A','Z') as $let) {
						echo " <a href='#$let'>$let</a>&nbsp; ";
					}
						echo "<a href='http://cfcc.edu/fasd/'>Show All</a></p>\n";
				  }

				  // if there's only one result, don't show it in the table 
				  if ( count($result)==1 ) { 
					foreach($result as $row) {
						if (preg_match("/tdspring470/",$row[gmail])) continue; 
						if (preg_match("/asspring628/",$row[gmail])) continue;
						if (preg_match("/Doell, Elaine L/",$row[name])) continue; 
						if (preg_match("/Robison, Margaret/",$row[name])) continue; 
						if (preg_match("/Bland, David H./",$row[name])) continue; 
					  $phone=fixphone($row[phone1]); 
					  $title=fixtitle($row[title]); 
					  $gmail = obfuscate($row[gmail]);
					  //<p class='email'><a href='mailto:$row[gmail]'>$row[gmail]</a><p>\n";
					  echo "
					  <h2 class='name' style='margin: 20px 0px 0px 0px'>$row[name]</h2>
					  <p class='title'>$title</p>
					  <p class='phone'>$phone</p>
					  <p class='email'><a href='/contactus/$gmail' rel='nofollow'>Send email</a></p>\n";

					}   
				  // if multiple results, show in table 
				  } else if ( count($result) > 1 ){
					  $i=0;
					  echo "<table id='results' cellpadding='0' cellspacing='0' border='0' width='100%'>\n";
					  echo "<tr><th scope='col'>Name</th>
							<th scope='col'>Title</th>
							<th scope='col'>Phone</th>
							<th scope='col'>Email</th></tr>\n";
					// display each row of results
					foreach($result as $row) {
						if (preg_match("/tdspring470/",$row[gmail])) continue; 
						if (preg_match("/asspring628/",$row[gmail])) continue; 
						if (preg_match("/Doell, Elaine L/",$row[name])) continue; 
						if (preg_match("/Robison, Margaret/",$row[name])) continue; 
						if (preg_match("/Bland, David H./",$row[name])) continue; 
					//try to not display student workers and nonemployees
					if (preg_match("/(Work Study)|(Tutor Learning Lab Student)|(Non Employee)|(Non-Emp)|(NONEMP)/",$row[title])) {continue;}
					//if (preg_match("/Lee, Amanda K/",$row[name])) {$row[phone1]='910-362-7555';}

					  // display the alpha header if this is a new letter
					  if ((count($result)>$alphapagemin) and ($row[letter]!=$prevletter)) {
					echo "
						<tr class='letterheader'><td class='letterheader' colspan='2'>
						<a name='".$row[letter]."'>".$row[letter]."</a></td>
						<td class='letterheader' colspan='2' align='right'>
							<a href='#top'>Back to top</a></td>
						</tr>\n
					"; 
					$prevletter=$row[letter];
					  }
					  // fix issues in the data
					  $phone=fixphone($row[phone1]); 
					  $title=fixtitle($row[title]); 
					  $gmail = obfuscate($row[gmail]);
					  //<td><a href='mailto:$row[gmail]'>$row[gmail]</a></td>
					  // print the row
					  echo "<tr class='row".($i++ % 2) . "'>
					  <td>$row[name]</td>
					  <td>$title</td>
					  <td>$phone</td>
					  <td><a href='/contactus/$gmail' rel='nofollow'>Send email</a></td>
					  </tr>\n";
					}   
					  echo "</table>\n";
				  } else {
					echo "No matches.";
				  }


				} catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}

				function fixphone( $in ) {
					$out = trim($in);
					# phone matches 910 - return input
					if (preg_match("/^910/",$out)) {
						return $out;
					} else if ((strlen($out)==7) or (strlen($out)==8)) {
					# phone has seven digits but doesn't start with 910 - add area code
						return( "910-".$out );
					} else if (strlen($out)==4) {
					# phone has 4 digits - add 910-362.
						return( "910-362-".$out );
					}
					return $out;
				}

				function fixtitle ( $in ) {
					$replace = array (
					'PT' => '',
					'FT' => '',
					'9 Mth' => '',
					'9mth' => '',
					'9 Month' => '',
					'9 Mo' => '',
					'12 Mth' => '',
					'12mth' => '',
					'12 Month' => '',
					'12 Mo' => '',
					 );
					 return str_replace(array_keys($replace),array_values($replace),$in);
				}

				?>
				</div>
			</div>
		</div>
		<!-- start geo -->
		<script type="text/javascript" src="/lib/geo.js"></script>
		<?php
		function obfuscate($output) {
		   // Replaces e-mail links with user defined URL patterns
		   $parsed = preg_replace("/([A-Za-z0-9._%-]+)\@([A-Za-z0-9._%-]+)\.([A-Za-z0-9._%-]+)\.([A-Za-z.]{2,4})/e", " str_rot13('\\1') .'+' .str_rot13('\\2') .'+' .str_rot13('\\3') .'+' .str_rot13('\\4') ", $output);
		   return $parsed;
		}
		?>
		<!-- end geo -->
	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  