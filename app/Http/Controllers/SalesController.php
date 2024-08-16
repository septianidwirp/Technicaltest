<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class SalesController extends Controller
{
    public function processSales()
    {
        try {
            DB::table('Sales')->chunk(1000, function ($sales) {
                foreach ($sales as $sale) {
                    // Proses setiap penjualan
                    Log::info('Processing Sale: ', (array) $sale);

                    // Contoh: Menghitung total penjualan per produk
                    $totalSalesAmount = DB::table('Sales')
                        ->where('ProductID', $sale->ProductID)
                        ->sum('SalesAmount');

                    // Simpan statistik ke tabel ProductStatistics
                    DB::table('ProductStatistics')->updateOrInsert(
                        ['ProductID' => $sale->ProductID],
                        ['TotalSalesAmount' => $totalSalesAmount]
                    );

                    // Contoh: Mengirim data ke API eksternal
                    $response = Http::post('https://api.example.com/endpoint', [
                        'SalesID' => $sale->SalesID,
                        'SalesDate' => $sale->SalesDate,
                        'ProductID' => $sale->ProductID,
                        'SalesAmount' => $sale->SalesAmount,
                        'SalesPersonID' => $sale->SalesPersonID,
                    ]);

                    if ($response->failed()) {
                        Log::error('Failed to send sale data to API', ['response' => $response->body()]);
                    }

                    // Lepaskan variabel besar dari memori setelah selesai diproses
                    $largeVariable = null;
                }
            });

            return response()->json(['message' => 'Sales processed successfully']);

        } catch (\Exception $e) {
            Log::error('Error processing sales: ' . $e->getMessage());
            return response()->json(['message' => 'Error processing sales'], 500);
        }
    }
}
