<?php 
namespace BiginExcel;


use Box\Spout\Common\Type;
use Box\Spout\Reader\CSV\Reader as CSVReader;
use Box\Spout\Reader\ReaderInterface;
use Box\Spout\Writer\CSV\Writer as CSVWriter;
use Box\Spout\Writer\WriterInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


/**
 * Class BiginExcel
 */
class BiginExcel {


    use Import;
    
    /**
     * data
     *
     * @var mixed
     */
    protected $data;
    
    /**
     * with_header
     *
     * @var bool
     */
    private $with_header = true;

    
    /**
     * __construct
     *
     * @param  mixed $data
     * @return void
     */
    public function __construct($data = null)
    {
        $this->data = $data;        
    }
    
    /**
     * data
     *
     * @param  mixed $data
     * @return void
     */
    public function data($data) {
        $this->data = $data;
        return $this;
    }
    
    /**
     * getType
     *
     * @param  mixed $path
     * @return void
     */
    protected function getType($path)
    {
        if (Str::endsWith($path, Type::CSV)) {
            return Type::CSV;
        } elseif (Str::endsWith($path, Type::ODS)) {
            return Type::ODS;
        } else {
            return Type::XLSX;
        }
    }




}