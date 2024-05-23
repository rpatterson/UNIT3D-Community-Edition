<?php

declare(strict_types=1);

/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

use App\Models\User;
use App\Models\Warning;

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $warning = Warning::factory()->create();
    $authUser = User::factory()->create();

    $response = $this->actingAs($authUser)->delete(route('users.warnings.destroy', [$user, $warning]));

    $response->assertOk();
    $this->assertModelMissing($warning);

    // TODO: perform additional assertions
});

test('destroy aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $warning = Warning::factory()->create();
    $authUser = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->delete(route('users.warnings.destroy', [$user, $warning]));

    $response->assertForbidden();
});

test('mass destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $authUser = User::factory()->create();

    $response = $this->actingAs($authUser)->delete(route('users.warnings.mass_destroy', [$user]));

    $response->assertOk();

    // TODO: perform additional assertions
});

test('mass destroy aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $authUser = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->delete(route('users.warnings.mass_destroy', [$user]));

    $response->assertForbidden();
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $warning = Warning::factory()->create();
    $authUser = User::factory()->create();

    $response = $this->actingAs($authUser)->patch(route('users.warnings.update', [$user, $warning]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $warning = Warning::factory()->create();
    $authUser = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->patch(route('users.warnings.update', [$user, $warning]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

// test cases...
