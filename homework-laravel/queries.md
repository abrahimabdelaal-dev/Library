
## 1. Products priced between 100 and 1000, cheapest first
\App\Models\Product::whereBetween('price', [100, 1000])->orderBy('price', 'asc')->get();
select * from `products` where `price` between 100 and 1000 order by `price` asc

## 2. The average price of products that are in stock
\App\Models\Product::where('stock', '>', 0)->avg('price');
select avg(`price`) as aggregate from `products` where `stock` > 0

## 3. Products with no description
\App\Models\Product::whereNull('description')->get();
select * from `products` where `description` is null

## 4. The three newest products
\App\Models\Product::latest()->take(3)->get();
select * from `products` order by `created_at` desc limit 3

## 5. Add 5 to the stock of one product found by name — without knowing its id
\App\Models\Product::where('name', 'Laptop')->increment('stock', 5);
update `products` set `stock` = `stock` + 5, `updated_at` = '2026-10-02 21:23:06' where `name` = 'Laptop'
