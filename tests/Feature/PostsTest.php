<?php

use App\Filament\Resources\PostResource\Pages\ManagePosts;
use App\Models\Post;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(
        User::where('is_admin', true)->first()
    );
});

it('has posts page', function () {
    Livewire::test(ManagePosts::class)->assertCanSeeTableRecords(
        Post::limit(10)->get()
    );
});

it('can create posts', function () {
    Livewire::test(ManagePosts::class)->assertPageActionExists('create');
});

it('can edit posts', function () {
    Livewire::test(ManagePosts::class)->assertTableActionExists('edit');
});

it('can delete posts', function () {
    Livewire::test(ManagePosts::class)->assertTableActionExists('delete');
});

it('cannot view posts', function () {
    $this->actingAs(
        User::where('is_admin', false)->first()
    );

    Livewire::test(ManagePosts::class)->assertStatus(403);
});
