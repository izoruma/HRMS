<?php
									include("config.php");
									?>
									<html>
									<head>
										<title>How to Generate PDF From MYSQL Using PHP</title>
										<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
									</head>
									<body>
										<div class="container">
											<div> </div>
											<div class="  d-flex flex-row align-items-center justify-content-between">
												<h6 class="m-0 font-weight-bold text-success">Generate Pdf</h6>
												<div class="card-tools" style="float: right;">
													<a href="generatepdf.php" target="_blank" class="btn btn-sm btn-primary">Generate PDF</a>
												</div>
											</div>
											<div> </div>
											<table class="table table-bordered">
												<tr>
													<td style="font-weight:bold;">Employee Id</td>
													<td style="font-weight:bold;">Employee Name</td>
													<td style="font-weight:bold;">Department</td>
													<td style="font-weight:bold;">Registered Date</td>
												</tr>
												<?php 
												$sql = "SELECT * from  tblemployee";
												$query = $dbh -> prepare($sql);
												$query->execute();
												$results=$query->fetchAll(PDO::FETCH_OBJ);
												$cnt=1;
												if($query->rowCount() > 0)
												{
													foreach($results as $row) 
													{ 
														?>

														<tr>
															<td><?php echo htmlentities($row->EmpId);?></td>
															<td><?php echo htmlentities($row->EmpName);?></td>
															<td><?php echo htmlentities($row->EmpDepartment);?></td>
															<td><?php  echo htmlentities(date("d-m-Y", strtotime($row->EmpRegDate)));?></td>
														</tr>

														<?php
													} 
												}
												?>
											</table>
										</div>
									</body>
									</html>