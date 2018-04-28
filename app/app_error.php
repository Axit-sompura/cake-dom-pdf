<?php
class AppError extends ErrorHandler {
  /**
    * Method to show the page expired error.
    * Read http://book.cakephp.org/view/1188/Error-Handling for more details
    */
  function expired() {
    $this->_outputMessage('expired');
  }
}
