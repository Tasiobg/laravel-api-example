<?php namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as HttpResponseCode;
use App\Models\Employee;
use App\Enums\ResponseStatusEnum;
use Exception;
use Log;

class EmployeeController extends Controller
{
    /**
     * Get employee by emp_no
     *
     * @param $employeeNo
     * @return Response
     */
    public function getEmployee($employeeNo)
    {
        try {
            $employee = Employee::findOrFail($employeeNo);
            return response()->json([
                'status' => ResponseStatusEnum::SUCCESS,
                'data' => $employee
            ]);
        } catch (ModelNotFoundException $e) {
            // if no result is found, eloquent will throw this exception
            return response()->json([
                'status' => ResponseStatusEnum::NOT_FOUND,
                'data' => []
            ], HttpResponseCode::HTTP_NOT_FOUND);
        } catch (Exception $e) {
            // Log the error so we can investigate if there are any issues
            Log::error($e->getMessage());
            return response()->json([
                'status' => ResponseStatusEnum::ERROR,
                'message' => 'Internal error'
            ], HttpResponseCode::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
