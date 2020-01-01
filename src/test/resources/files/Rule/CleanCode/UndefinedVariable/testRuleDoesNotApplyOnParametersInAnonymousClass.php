<?php

function testRuleDoesNotApplyOnParametersInAnonymousClass()
{
    return new class() {
        public function checkFoo(User $user): bool
        {
            return $user->addFailedLoginAttempt() > 1;
        }
    };
}
