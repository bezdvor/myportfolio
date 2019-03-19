<?

class Pagination
{
    private $itemsCount, $countOnPage, $activePage, $lihksCount, $paginationPath;

    public function __construct($itemsCount, $countOnPage, $activePage, $paginationPath)
    {
        $this->itemsCount = $itemsCount; //количество всех записей в таблице
        $this->countOnPage = $countOnPage;//количество записей на одной странице
        $this->activePage = $activePage;// номер активной страницы
        $this->lihksCount = ceil($itemsCount/$countOnPage);//количество
        $this->paginationPath = $paginationPath;
    }

    public function show()
    {
        if ($this->activePage >= $this->lihksCount - 2) {
            $min = $this->lihksCount - 4; //default is 4
            $max = $this->lihksCount;
            $leftArrow = "<a href='" .$this->paginationPath. "1'><button>First</button></a>
            <a href='" . $this->paginationPath . ($this->activePage - 1) . "'>
            <button>Prev</button></a>";
            $rightArrow = "";
        } else if ($this->activePage <= 3) {
            $min = 1;
            $max = 5;
            $leftArrow = "";
            $rightArrow = "<a href='" . $this->paginationPath . ($this->activePage + 1) . "'>
<button>Next</button></a><a href='" . $this->paginationPath . $this->lihksCount . "'>
			<button>Last</button></a>";
        } else {
            $min = $this->activePage - 2;
            $max = $this->activePage + 2;
            $leftArrow = "<a href='" . $this->paginationPath . "1'>
			<button>First</button>
						</a>
						<a href='" . $this->paginationPath . ($this->activePage - 1) . "'>
							<button>Prev</button>
						</a>";
            $rightArrow = "<a href='" . $this->paginationPath . ($this->activePage + 1) . "'>
								<button>Next</button>
							</a>
							<a href='" . $this->paginationPath . $this->lihksCount . "'>
								<button>Last</button>
							</a>";
        }

        $x = "<div class='pagination'>";
        $x .= $leftArrow;

        for ($i = $min; $i <= $max; $i++) {
            if ($this->activePage == $i) {
                $x .= "<button class='active'>$i</button>";
            } else {
                $x .= "<a href='" . $this->paginationPath . "$i'><button>$i</button></a>";
            }
        }
        $x .= $rightArrow;
        $x .= "</div>";
        return $x;
    }
}