  1. $product = Product::select('ProductName', 'QuantityPerUnit')->get();

  2. $product = Product::select('ProductID', 'name')->get();

  3. $mostExpensiveProduct = DB::table('products')
                ->select('ProductName', 'UnitPrice')
                ->orderByDesc('UnitPrice')
                ->limit(1)
                ->first();  

  4. $leastExpensiveProduct = DB::table('products')
                ->select('ProductName', 'UnitPrice')
                ->orderByAsc('UnitPrice')
                ->limit(1)
                ->first();

  5. $products = DB::table('products')
                ->select('ProductID', 'name', 'UnitPrice')
                ->where('UnitPrice', '<', 20)
                ->get();

  6. $products = Product::select('ProductName', 'UnitsOnOrder', 'UnitInStock')
                    ->whereColumn('UnitInStock', '<', 'UnitsOnOrder')
                    ->get();