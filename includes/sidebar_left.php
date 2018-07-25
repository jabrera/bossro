			<div id="sidebar_left">
				<div id="sidebar_base">
					<div id="sb_container">
						<div id="container_title">Left Sidebar</div>
						<p><?php
						echo 'Content';
						function GetServerStatus($site, $port) {
							$status = array("OFFLINE", "ONLINE");
							$fp = @fsockopen($site, $port, $errno, $errstr, 2);
							if (!$fp) {
								echo 'Login Status: '.$status[0].'<br>
								Character Status: '.$status[0].'<br>
								Map Status: '.$status[0].'<br>';
							} else {
								echo 'Login Status: '.$status[1].'<br>
								Character Status: '.$status[1].'<br>
								Map Status: '.$status[1].'<br>';
							}
						}
						?>
					</div>
				</div>
			</div>