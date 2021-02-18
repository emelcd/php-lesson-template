<?php
function handleErrorsConnection($conn)
{
	if ($conn->connect_error) {
		$error = $conn->connect_error;
		$n_error = $conn->connect_errno;
		header("Location: error.php?error=" . $error . "&n_error=" . $n_error);
		die;
	}
}
function handleErrorsQuery($bool, $conn)
{
	$error = $conn->error;
	if ($bool === FALSE) {
		header("Location: error.php?error=" . $error . "&n_error= QUERY ERROR");
		die;
	}
}

?>