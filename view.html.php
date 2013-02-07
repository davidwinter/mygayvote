<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>My gay vote</title>
	
	<meta name="description" content="Voting records of Conservatives, Labour and Liberal Democrats showing support of LGBT issues in the UK." /> 
	<meta name="keywords" content="LGBT,gay,uk,election,vote,conservatives,labour,liberal democrats,david cameron,gordon brown,nick clegg,age of consent,gay adoption,section 28,equality act,civil partnerships,gay marriage" /> 
	<meta name="language" content="English" />
	
	<link type="text/css" rel="stylesheet" href="reset.css" />
	<link type="text/css" rel="stylesheet" href="text.css" />
	<link type="text/css" rel="stylesheet" href="960.css" />
	<link type="text/css" rel="stylesheet" href="main.css" />
	<!--[if lt IE 8]>
		<link type="text/css" rel="stylesheet" href="ie.css" />
	<![endif]-->
	
</head>

<body>
	<div class="container_12">
		<div class="grid_12">
			<script type="text/javascript">
			tweetmeme_url = 'http://mygayvote.co.uk/';
			tweetmeme_source = 'mygayvote';
			</script>
			<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
			<h1>My gay vote</h1>
			<p class="intro">They want us to vote for them, but do they vote for us in Parliament?</p>			
			<p>Below shows the amount of support we have received from each party on important LGBT issues.</p>
			
			<table>
				<thead>
					<tr>
						<th></th>
						<th class="party">Conservatives</th>
						<th class="party">Labour</th>
						<th class="party">Liberal Democrats</th>
					</tr>
				</thead>
				<tbody class="figures">
					<?php foreach ($votes as $vote): ?>
					<tr>
						<td class="issue">
							<h3><?php echo $vote['title']; ?> <a href="<?php echo $vote['link']; ?>" target="_blank">#</a></h3>
							<div class="desc">
								<p><?php echo $vote['description']; ?></p>
							</div>
						</td>
						<td class="vote">
							<img src="<?php echo getGraphURL($vote['votes']['conservatives'], '0087dc'); ?>" alt="<?php echo $per = calculatePositive($vote['votes']['conservatives']); $con_total += $per; ?>%" title="<?php echo $per; ?>%" /><br /><span><?php echo $per; ?>%</span>
						</td>
						<td class="vote">
							<img src="<?php echo getGraphURL($vote['votes']['labour'], 'dc241f'); ?>" alt="<?php echo $per = calculatePositive($vote['votes']['labour']); $lab_total += $per; ?>%" title="<?php echo $per; ?>%" /><br /><span><?php echo $per; ?>%</span>
						</td>
						<td class="vote">
							<img src="<?php echo getGraphURL($vote['votes']['liberaldemocrats'], 'ffd700'); ?>" alt="<?php echo $per = calculatePositive($vote['votes']['liberaldemocrats']); $ldem_total += $per; ?>%" title="<?php echo $per; ?>%" /><br /><span><?php echo $per; ?>%</span>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				<tbody class="averages">
					<tr>
						<th>Averages</th>
						<td class="vote"><?php echo round($con_total / $total_issues); ?>%</td>
						<td class="vote"><?php echo round($lab_total / $total_issues); ?>%</td>
						<td class="vote"><?php echo round($ldem_total / $total_issues); ?>%</td>
					</tr>
				</tbody>
			</table>
			
			
		</div>
		
		<div class="grid_12 footer">
			<p>Comments? Suggestions? Want updates? <a href="http://twitter.com/mygayvote">@mygayvote</a></p>
			<p>By <a href="http://twitter.com/davidwinter">@davidwinter</a></p>
		</div>
		
	</div>

<script type="text/javascript"> 
try {
var pageTracker = _gat._getTracker("UA-15650630-1");
pageTracker._trackPageview();
} catch(err) {}</script> 
<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '4f9abd8cf5a1f528ba000017');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
</body>
</html>