<?php

namespace Alex\Entities;

use Carbon\Carbon;
use Alex\Markdown\Parser;

class Trip
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $subtitle;

    /** @var string */
    protected $slug;

    /** @var string */
    protected $text;

    /** @var Carbon */
    protected $date;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setTitle($data['title'])
            ->setSubtitle($data['subtitle'])
            ->setSlug($data['slug'])
            ->setText($data['text'])
            ->setDate($data['date']);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    /**
     * @param string $subtitle
     * @return $this
     */
    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return $this
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return app(Parser::class)->parse($this->text);
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return Carbon
     */
    public function getDate(): Carbon
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return $this
     */
    public function setDate(string $date): self
    {
        $this->date = new Carbon($date);

        return $this;
    }
}
