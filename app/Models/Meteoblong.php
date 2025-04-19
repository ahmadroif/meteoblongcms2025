<?php

namespace App\Models;

class Meteoblong
{
    protected static $salesData = [];

    public static function all()
    {
        return self::$salesData;
    }

    public static function find($id)
    {
        foreach (self::$salesData as $sale) {
            if ($sale['id'] == $id) {
                return $sale;
            }
        }
        return null;
    }

    public static function create($data)
    {
        $newId = empty(self::$salesData) ? 1 : max(array_column(self::$salesData, 'id')) + 1;
        $newSale = [
            'id' => $newId,
            'customer' => $data['customer'],
            'product' => $data['product'],
            'quantity' => $data['quantity'],
            'total_price' => $data['quantity'] * 50000,
            'order_date' => $data['order_date']
        ];
        array_push(self::$salesData, $newSale);
        return $newSale;
    }

    public static function update($id, $data)
    {
        foreach (self::$salesData as &$sale) {
            if ($sale['id'] == $id) {
                $sale = array_merge($sale, $data);
                $sale['total_price'] = $sale['quantity'] * 50000;
                return $sale;
            }
        }
        return null;
    }

    public static function delete($id)
    {
        self::$salesData = array_filter(self::$salesData, function ($sale) use ($id) {
            return $sale['id'] != $id;
        });
        return true;
    }
}