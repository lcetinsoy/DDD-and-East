<?php

namespace EastAndDDD\Model;

interface EmployeeRepositoryInterface {

            public function wasAskedToSaveManagerBy(HireService $service, Employee $employe);
    
}
