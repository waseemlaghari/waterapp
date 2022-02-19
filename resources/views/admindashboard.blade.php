<x-admin-header componentName="Admin | RO Plants App" />

<div class="maindashboardadmin">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<!-- small box -->
            	<div class="smldivc">
            		<div class="small-box bg-info">
			            <div class="inner">
			                <h3>
		                		{{ $cntmessage }}
			                </h3>

			                <p>Total Messages</p>
			            </div>
			            <div class="icon">
			                <i class="ion ion-bag"></i>
			            </div>
			            <a href="/lstmessages" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			        </div>
				</div>
            </div>
			<div class="col-md-3">
				<!-- small box -->
            	<div class="smldivc">
            		<div class="small-box bg-warning">
			            <div class="inner">
			                <h3>
			                	{{ $citiestot }}
			                </h3>

			                <p>List of all cities</p>
			            </div>
			            <div class="icon">
			                <i class="ion ion-bag"></i>
			            </div>
			            <a href="/lstcities" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			        </div>
				</div>
			</div>
			<div class="col-md-3">
				<!-- small box -->
            	<div class="smldivc">
            		<div class="small-box bg-primary">
			            <div class="inner">
			                <h3>
			                	{{ $plantstot }}
			                </h3>

			                <p>All Plants</p>
			            </div>
			            <div class="icon">
			                <i class="ion ion-bag"></i>
			            </div>
			            <a href="/adlstofagencies" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			        </div>
				</div>
			</div>
			<div class="col-md-3">
				<!-- small box -->
            	<div class="smldivc">
            		<div class="small-box bg-danger">
			            <div class="inner">
			                <h3>
			                	{{ $orderstot }}
			                </h3>

			                <p>List of Orders</p>
			            </div>
			            <div class="icon">
			                <i class="ion ion-bag"></i>
			            </div>
			            <a href="/adlstoforders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			        </div>
				</div>
			</div>
		</div>
	</div>
</div>


<x-admin-footer />