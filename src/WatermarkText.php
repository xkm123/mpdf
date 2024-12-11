<?php

namespace Mpdf;

class WatermarkText implements \Mpdf\Watermark
{
    /**@var int*/
    private $x;
    /**@var int*/
    private $y;
    /**@var int*/
    private $w;
    /**@var int*/
    private $h;
	/** @var string */
	private $text;

	/** @var int */
	private $size;

	/** @var int */
	private $angle;

	/** @var mixed */
	private $color;

	/** @var float */
	private $alpha;

	/** @var string */
	private $font;

	public function __construct($x,$y,$w,$h,$text, $size = 96, $angle = 45, $color = 0, $alpha = 0.2, $font = null)
	{
        $this->x=$x;
        $this->y=$y;
        $this->w=$w;
        $this->h=$h;
		$this->text = $text;
		$this->size = $size;
		$this->angle = $angle;
		$this->color = $color;
		$this->alpha = $alpha;
		$this->font = $font;
	}
    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getW(): int
    {
        return $this->w;
    }

    public function getH(): int
    {
        return $this->h;
    }

	public function getText()
	{
		return $this->text;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getAngle()
	{
		return $this->angle;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function getAlpha()
	{
		return $this->alpha;
	}

	public function getFont()
	{
		return $this->font;
	}

}
