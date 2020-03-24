<?php 

namespace biginExcel;
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Reader\SheetInterface;
use Illuminate\Support\Collection;

trait Import {    
    /**
     * sheet_number
     *
     * @var int
     */
    private $sheet_number = 1;    
    /**
     * getType
     *
     * @param  mixed $path
     * @return void
     */
    abstract protected function getType($path);


    // public function import($path,$data) {
    //     $reader = $this->
    // }

    public function reader($path) {
        $reader = ReaderFactory::create($this->getType($path));
        $reader->open($path);
        return $reader;
    }
}