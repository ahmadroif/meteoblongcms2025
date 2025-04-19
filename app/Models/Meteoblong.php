<?php

namespace App\Models;

class Meteoblong
{
    protected static $salesData = [];

    public static function all()
    {
        return session('salesData', self::$salesData);
    }

    public static function find($id)
    {
        $salesData = session('salesData', self::$salesData);
        foreach ($salesData as $sale) {
            if ($sale['id'] == $id) {
                return $sale;
            }
        }
        return null;
    }

    public static function create($data)
    {
        $salesData = session('salesData', self::$salesData);
        $newId = empty($salesData) ? 1 : max(array_column($salesData, 'id')) + 1;
        $newSale = [
            'id' => $newId,
            'customer' => $data['customer'],
            'product' => $data['product'],
            'quantity' => $data['quantity'],
            'total_price' => $data['quantity'] * 50000,
            'order_date' => $data['order_date']
        ];
        $salesData[] = $newSale;
        session(['salesData' => $salesData]);
        return $newSale;
    }

    public static function update($id, $data)
    {
        $salesData = session('salesData', self::$salesData);
        foreach ($salesData as &$sale) {
            if ($sale['id'] == $id) {
                $sale = array_merge($sale, $data);
                $sale['total_price'] = $sale['quantity'] * 50000;
                session(['salesData' => $salesData]);
                return $sale;
            }
        }
        return null;
    }

    public static function delete($id)
    {
        $salesData = session('salesData', self::$salesData);
        $salesData = array_filter($salesData, function ($sale) use ($id) {
            return $sale['id'] != $id;
        });
        session(['salesData' => array_values($salesData)]);
        return true;
    }
}
