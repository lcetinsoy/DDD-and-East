<?php

namespace EastAndDDD\Model;

interface EmployeeRepositoryInterface {

    public function wasAskedToSaveEmployeeBy($controller, Employee $employe);
    
}
