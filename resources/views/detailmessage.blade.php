<x-admin-header componentName="Admin | RO Plants App" />
<div class="maincontactdetail">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row message-wrapper rounded shadow mb-20">
    <div class="col-md-2">
        
    </div>
    <div class="col-md-8">
        <div class="panel">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb custombread" style="background-color: #e9ecef; padding: 15px 10px 15px 10px; border-radius: 7px;">
    <li class="breadcrumb-item active" aria-current="page">Detailed Message:</li>
  </ol>
</nav>
            <div class="panel-heading">
                <div class="media">
                    <a href="/lstmessages" class="btn btn-danger pull-right rounded"><i class="fa fa-share"></i></a>
                    
                    <div class="media-body">
                        <h4 class="media-heading">
                        	{{ $contact_detail[0]['cn_name']; }}
                        <span class="badge badge-secondary" style="background-color: #CCC;"> ( {{ $contact_detail[0]['cn_email']; }} ) </span> 
                        </h4> 
                    </div>
                </div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <p class="lead">
                    <b> Subject: </b>  
                    {{ $contact_detail[0]['cn_subject']; }}
                </p>
                <hr>
                <p>
                	<b> Message: </b>
                    {{ $contact_detail[0]['cn_message']; }}
                </p>
                <br><!-- 
                <p>
                    Thanks! <br>
                    Rebecca.
                </p> -->
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.message-sideright -->

    <div class="col-md-2">
    	
    </div>
</div>
</div>
</div>

<x-admin-footer />