<?php require($_SERVER['DOCUMENT_ROOT'].'/forexpert/system/b_mail.system.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Forexpert</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="includes/css/compiled/global.css" />
</head>
<body>
	<header>
		<h1>Welcome to the Official Website of <span>Myforexpert.com</span></h1>
		<p>New website coming soon</p>
	</header>
	<main>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<label for="email">Enter valid email address</label>
			<input type="email" name="email" placeholder="Enter email address here...">
			<input type="submit" name="submit" value="go!">
		</form>
		<article>
			<p>
				Welcome to the home of the best forex trading tips on the net.  We have the knowledge that will help you profit from stock investments on the foreign exchange market.  The forex market is riddled with currency and exchange ‘experts’ but we are the only online foreign exchange advice and tips providers that show you our REAL trading history; good or bad.  There are hits and there are misses, as with everything, but unlike other forex advice sites, our goal is to put a human being behind the statistic analysis in order to ensure the most accurate predictions.  No algorithm computer predictions will cross your desk without our meticulous inspection and approval.
			</p>
			<p>
				We have information on how to trade gold or silver; how to predict and deal with USD fluctuation, and how to take a minimum risk while maximizing your profits.
			</p>
			<p>
				To receive instant information on signing up for this exclusive site, enter a valid email address in the box to the right.  Also stay up to date on the new site’s release date by entering a valid email address to the right.
			</p>
		</article>
	</main>
</body>
</html>