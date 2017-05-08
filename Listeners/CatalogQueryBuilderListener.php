<?php

namespace Project\Project\Listeners;

use Illuminate\Http\Request;
use Kommercio\Events\CatalogQueryBuilder as CatalogQueryBuilderEvent;
use Kommercio\Models\ProductDetail;

class CatalogQueryBuilderListener
{
    protected $request;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  OrderUpdate  $event
     * @return void
     */
    public function handle(CatalogQueryBuilderEvent $event)
    {
        $qb = $event->queryBuilder;

        if($event->type == 'product_categories'){

        }elseif($event->type == 'product_category_products'){

        }
    }
}
