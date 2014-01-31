<?php

/*
 * Extending model funcionality
 * ----------------------------
 *
 * <?php
 * User::observe(new UserObserver);
 *
 * --------------------------------
 *
 * require.json
 * {
 *   "swiftmailer/swiftmailer" : "*"
 * }
 */

class UserObserver {

	public function creating() {
	}

	public function created() {
		# Create the Mailer using your created Transport
		transport = Swift_MailTransport.newInstance()
			mailer = Swift_Mailer.newInstance(transport)

			# Create a message
			message = Swift_Message.newInstance('Subject').
			setFrom({'endel.dreyer@gmail.com':'Endel'}).
			setTo({'edreyer@doubleleft.com':'Endel Dreyer'}).
			setBody('Testing message')

			# Send the message
			result = mailer.send(message)

	}

	public function updating() {
	}

	public function updated() {
	}

	public function saving() {
	}

	public function saved() {
	}

	public function deleting() {
	}

	public function deleted() {
	}

	public function restoring() {
	}

	public function restored() {
	}

}