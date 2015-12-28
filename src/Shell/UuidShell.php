<?php
/**
 * UuidShell
 *
 * @package UuidShell\Shell
 */
namespace Uuid\Shell;

use Cake\Console\Shell;
use Cake\Utility\Text;

/**
 * UuidShell class.
 *
 * Provides a command-line shortcut for generating batches of new UUIDs.
 */
class UuidShell extends Shell {

	/**
	 * Overrides the default welcome function in order to suppress the
	 * normal "Welcome to CakePHP" banner.
	 *
	 * @return void
	 */
	public function _welcome() {
		// Do nothing.
	}

	/**
	 * Generate a batch of new UUIDs.
	 *
	 * @return	void
	 */
	public function main() {
		// @codingStandardsIgnoreStart
		for (
			$count = (isset($this->args[0]) ? max(1, (int)$this->args[0]) : 1);
			$count-- > 0;
			$this->out(Text::uuid())
		);
		// @codingStandardsIgnoreEnd
	}

	/**
	 * getOptionParser
	 *
	 * Processing command line options.
	 *
	 * @access public
	 * @return CosnsoleOptionParser
	 * @codeCoverageIgnore
	 */
	public function getOptionParser() {
		$parser = parent::getOptionParser();
		$parser
			->addArgument('count', [
				'help' => 'Optional positive integer indicating how many UUIDs to generate and print. (Default: 1)',
				'required' => false,
			])
			->description(__('Generates batches of UUIDs using Cake\'s String class.'));
		return $parser;
	}
}
