<?php
namespace Timeline\Entity;

class TimelineEntity
{
    protected $idTimeline;
    protected $startDate;
    protected $endDate;
    protected $headline;
    protected $text;
    protected $media;
    protected $mediaCredit;
    protected $mediaCaption;
    protected $mediaThumbnail;
    protected $type;
    protected $tag;
    
    /**
     * @return the $idTimeline
     */
    public function getIdTimeline()
    {
        return $this->idTimeline;
    }

    /**
     * @return the $startDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return the $endDate
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return the $headline
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @return the $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return the $media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @return the $mediaCredit
     */
    public function getMediaCredit()
    {
        return $this->mediaCredit;
    }

    /**
     * @return the $mediaCaption
     */
    public function getMediaCaption()
    {
        return $this->mediaCaption;
    }

    /**
     * @return the $mediaThumbnail
     */
    public function getMediaThumbnail()
    {
        return $this->mediaThumbnail;
    }

    /**
     * @return the $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return the $tag
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param field_type $idTimeline
     */
    public function setIdTimeline($idTimeline)
    {
        $this->idTimeline = $idTimeline;
    }

    /**
     * @param field_type $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @param field_type $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @param field_type $headline
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
    }

    /**
     * @param field_type $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param field_type $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

    /**
     * @param field_type $mediaCredit
     */
    public function setMediaCredit($mediaCredit)
    {
        $this->mediaCredit = $mediaCredit;
    }

    /**
     * @param field_type $mediaCaption
     */
    public function setMediaCaption($mediaCaption)
    {
        $this->mediaCaption = $mediaCaption;
    }

    /**
     * @param field_type $mediaThumbnail
     */
    public function setMediaThumbnail($mediaThumbnail)
    {
        $this->mediaThumbnail = $mediaThumbnail;
    }

    /**
     * @param field_type $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param field_type $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    
    
    
    
    
    
    
}