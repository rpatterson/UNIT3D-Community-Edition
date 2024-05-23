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

use App\Http\Requests\StorePollVoteRequest;

beforeEach(function (): void {
    $this->subject = new StorePollVoteRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    expect($actual)->toBeTrue();
});

test('rules', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'options' => [
            'required',
            'array',
            'min:1',
        ],
        'options.*' => [
            'integer',
        ],
    ], $actual);
});

test('messages', function (): void {
    $actual = $this->subject->messages();

    expect($actual)->toEqual([
        'options.required' => 'You must select an answer',
    ]);
});
