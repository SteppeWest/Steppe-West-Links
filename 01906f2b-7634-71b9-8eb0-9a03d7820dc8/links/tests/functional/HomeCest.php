<?php

namespace links\tests\functional;

use links\tests\FunctionalTester;

class HomeCest
{
	public function checkOpen(FunctionalTester $I)
	{
		$I->amOnRoute(\Yii::$app->homeUrl);
		$I->see('My Application');
		$I->seeLink('About');
		$I->click('About');
		$I->see('This is the About page.');
	}
}