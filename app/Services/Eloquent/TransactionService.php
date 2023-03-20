<?php

namespace App\Services\Eloquent;

use App\Models\Eloquent\Transaction;

class TransactionService extends BaseService
{
    public function __construct()
    {
        parent::__construct(new Transaction);
    }

    /**
     * @param int $customerId
     * @param int|null $companyId
     * @param int|null $typeId
     * @param int|null $safeboxId
     * @param int|null $direction
     * @param string|null $datetimeStart
     * @param string|null $datetimeEnd
     * @param int|null $amountMin
     * @param int|null $amountMax
     */
    public function all(
        int    $customerId,
        int    $companyId = null,
        int    $typeId = null,
        int    $safeboxId = null,
        int    $direction = null,
        string $datetimeStart = null,
        string $datetimeEnd = null,
        int    $amountMin = null,
        int    $amountMax = null
    )
    {
        $transactions = Transaction::with([
            'type',
            'company',
            'safebox',
        ])->where('customer_id', $customerId);

        if ($companyId) {
            $transactions->where('company_id', $companyId);
        }

        if ($typeId) {
            $transactions->where('type_id', $typeId);
        }

        if ($safeboxId) {
            $transactions->where('safebox_id', $safeboxId);
        }

        if ($direction) {
            $transactions->where('direction', $direction);
        }

        if ($datetimeStart) {
            $transactions->where('datetime', '>=', $datetimeStart);
        }

        if ($datetimeEnd) {
            $transactions->where('datetime', '<=', $datetimeEnd);
        }

        if ($amountMin) {
            $transactions->where('amount', '>=', $amountMin);
        }

        if ($amountMax) {
            $transactions->where('amount', '<=', $amountMax);
        }

        return $transactions->get();
    }

    /**
     * @param int $invoiceId
     */
    public function getByInvoiceId(
        $invoiceId
    )
    {
        return Transaction::where('invoice_id', $invoiceId)->get();
    }

    /**
     * @param int $invoiceId
     */
    public function deleteByInvoiceId(
        $invoiceId
    )
    {
        return Transaction::where('invoice_id', $invoiceId)->delete();
    }

    /**
     * @param int|null $companyId
     * @param int|null $safeboxId
     */
    public function count(
        int $companyId = null,
        int $safeboxId = null,
    )
    {
        $transactions = Transaction::with([]);

        if ($companyId) {
            $transactions->where('company_id', $companyId);
        }

        if ($safeboxId) {
            $transactions->where('safebox_id', $safeboxId);
        }

        return $transactions->count();
    }

    /**
     * @param int $pageIndex
     * @param int $pageSize
     * @param int $customerId
     * @param int|null $companyId
     * @param int|null $typeId
     * @param int|null $categoryId
     * @param int|null $safeboxId
     * @param int|null $direction
     * @param string|null $datetimeStart
     * @param string|null $datetimeEnd
     * @param int|null $amountMin
     * @param int|null $amountMax
     */
    public function index(
        int    $customerId,
        int    $pageIndex,
        int    $pageSize,
        int    $companyId = null,
        int    $typeId = null,
        int    $categoryId = null,
        int    $safeboxId = null,
        int    $direction = null,
        string $datetimeStart = null,
        string $datetimeEnd = null,
        int    $amountMin = null,
        int    $amountMax = null
    )
    {
        $transactions = Transaction::with([
            'type',
            'company',
            'safebox',
        ]);

        if ($companyId) {
            $transactions->where('company_id', $companyId);
        }

        if ($typeId) {
            $transactions->where('type_id', $typeId);
        }

        if ($categoryId) {
            $transactions->where('category_id', $categoryId);
        }

        if ($safeboxId) {
            $transactions->where('safebox_id', $safeboxId);
        }

        if ($direction) {
            $transactions->where('direction', $direction);
        }

        if ($datetimeStart) {
            $transactions->where('datetime', '>=', $datetimeStart);
        }

        if ($datetimeEnd) {
            $transactions->where('datetime', '<=', $datetimeEnd);
        }

        if ($amountMin) {
            $transactions->where('amount', '>=', $amountMin);
        }

        if ($amountMax) {
            $transactions->where('amount', '<=', $amountMax);
        }

        $transactions->where('customer_id', $customerId);

        return [
            'totalCount' => $transactions->count(),
            'pageIndex' => $pageIndex,
            'pageSize' => $pageSize,
            'transactions' => $transactions->orderBy('created_at', 'desc')->skip($pageIndex * $pageSize)->take($pageSize)->get(),
        ];
    }

    /**
     * @param int $customerId
     * @param int|null $companyId
     * @param int|null $invoiceId
     * @param string $datetime
     * @param int $typeId
     * @param int $categoryId
     * @param string|null $receiptNumber
     * @param string|null $description
     * @param int|null $safeboxId
     * @param int $direction
     * @param float $amount
     * @param int $locked
     */
    public function create(
        $customerId,
        $companyId,
        $invoiceId,
        $datetime,
        $typeId,
        $categoryId,
        $receiptNumber,
        $description,
        $safeboxId,
        $direction,
        $amount,
        $locked
    )
    {
        $transaction = new Transaction;
        $transaction->customer_id = $customerId;
        $transaction->company_id = $companyId;
        $transaction->invoice_id = $invoiceId;
        $transaction->datetime = $datetime;
        $transaction->type_id = $typeId;
        $transaction->category_id = $categoryId;
        $transaction->receipt_number = $receiptNumber;
        $transaction->description = $description;
        $transaction->safebox_id = $safeboxId;
        $transaction->direction = $direction;
        $transaction->amount = $amount;
        $transaction->locked = $locked;
        $transaction->save();

        return $transaction;
    }
}
