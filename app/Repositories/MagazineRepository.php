<?php

namespace App\Repositories;

use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use App\Models\Magazine;

class MagazineRepository implements CrudInterface, SlugInterface
{
    /**
     * Get pages by filtering args.
     */
    public function get(array $args = []): \Illuminate\Database\Eloquent\Collection | \Illuminate\Database\Eloquent\Builder
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order = empty($args['order']) ? 'desc' : $args['order']; // asc, desc
        $query = Magazine::orderBy($orderBy, $order);

        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }

        return $query->get();
    }

    public function show(int $id): Magazine | null
    {
        return Magazine::find($id);
    }

    public function showBySlug(string $slug): Magazine | null
    {
        return Magazine::where('slug', $slug)->first();
    }

    public function create(array $data): Magazine | null
    {
        $this->prepareDataForDatabase($data);

        return Magazine::create($data);
    }

    private function prepareDataForDatabase(array&$data, ?Magazine $magazine = null): void
    {
        if (empty($data['slug'])) {
            $data['slug'] = UniqueSlug::generate(Magazine::class, $data['title'], 'slug');
        }

        if (!empty($data['image'])) {

            foreach ($data['image'] as $img) {
                $image_name = $data['slug'] . '-' . time() . '.' . $img->extension();
                $data['image'] = $img->storePubliclyAs('public/images', $image_name);
            }

        }
    }
}
