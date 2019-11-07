<!DOCTYPE html>
    <html lang="en-US">
    	<head>
            <title>VerifyToken</title>
    		<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    		<style type="text/css">
    			* {
    				box-sizing: border-box;
    				padding: 0;
    				margin: 0;
    			}
    			body {
    				background: white;
    				color: black !important;
    			}
    			.verifycode {
    				color: lightgreen;
    				background: white;
    				border: 1px solid lightgreen;
    				text-align: center;
    				padding: 10px 50px 10px 50px;
    				width: 50%;
    				margin: auto;
    				font-size: 20px;
    				font-weight: bold;
    			}
    			.welcome{
    				font-weight: bold;
    				text-align: center;
                    color: lightgreen !important;
    			}
    			.note{
    				font-weight: bold;
    				text-align: center;
                    color: black !important;
    			}
                .team{
                    font-weight: normal;
                    font-size: 15px;
                    text-align: center;
                    color: grey !important;
                }

    		</style>
    	</head>
    	<body>
    		<div>
    			
    		</div>
    		<h2 class="welcome">VerifyToken</h2>
    		<div>
    			 <h4 style="color: grey;">Hello <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></h4>
    		</div>
    		<div>
    			 <p class="note">Use this verification token to create a new password</p>
    			 <p class="verifycode"><?php echo e($user->verifycode); ?></p>
    		</div><br><br>

            <div>
                 <p class="team">if this mail is not authourize by you please discard</p>
                 <p class="team" style="font-style: italic;">GateGuard Team</p>
            </div>
    	</body>
    </html><?php /**PATH C:\wamp\www\hng\Gateapp-api\resources\views/recovery/new_verify.blade.php ENDPATH**/ ?>