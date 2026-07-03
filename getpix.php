<?php
//

							$sqlpic="select * from photoidx where sno =".$xpno;
							$rsltpic= queryMySQL($sqlpic);
							$nrpix= $rsltpic->num_rows;
							$rowpix =$rsltpic->fetch_array(MYSQLI_ASSOC);
							
                            //
 ?>