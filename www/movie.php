
<<?php 
	class Movie {

		private $imgPath = "null";
		private $name = "null";
		private $director = "null";
		private $category = "null";
		private $ageRating = 7;
		private $imdbRating = "null";
		private $description = "null";

		
	public function __construct($imgPath, $name, $director, $category, $ageRating, $imdbRating, $description){
		$this->imgPath=$imgPath;
		$this->name=$name;
		$this->director=$director;
		$this->category=$category;
		$this->ageRating=$ageRating;
		$this->imdbRating=$imdbRating;
		$this->description=$description;
	}

	public function displayMovie(){
		echo "<h3> Title: " . $this->name . "</h3>";
		echo "<h4> Director(s): " . $this->director . "</h4>";
		echo "<p> Category: " . $this->category . "</p>";
		echo "<p> Age Rating: " . $this->ageRating . "</p>";
		echo "<p> IMDB Rating: " . $this->imdbRating . "</p>";
		echo "<p> Description: " . $this->description . "</p>";
	}
	

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     *
     * @return self
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgeRating()
    {
        return $this->ageRating;
    }

    /**
     * @param mixed $ageRating
     *
     * @return self
     */
    public function setAgeRating($ageRating)
    {
        $this->ageRating = $ageRating;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImdbRating()
    {
        return $this->imdbRating;
    }

    /**
     * @param mixed $imdbRating
     *
     * @return self
     */
    public function setImdbRating($imdbRating)
    {
        $this->imdbRating = $imdbRating;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImgPath()
    {
        return $this->imgPath;
    }

    /**
     * @param mixed $imgPath
     *
     * @return self
     */
    public function setImgPath($imgPath)
    {
        $this->imgPath = $imgPath;

        return $this;
    }
}


 ?>