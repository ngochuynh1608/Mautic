<?php

namespace Debril\RssAtomBundle\Protocol\Formatter;

use Debril\RssAtomBundle\Tests\Protocol\FormatterAbstract;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-12 at 21:51:18.
 */
class FeedRssFormatterTest extends FormatterAbstract
{
    /**
     * @var FeedRssFormatter
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->object = new FeedRssFormatter();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\FeedFormatter::toString
     */
    public function testToString()
    {
        $string = $this->object->toString($this->feed);

        $this->assertInternalType('string', $string);
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Formatter\FeedRssFormatter::toDom
     */
    public function testToDom()
    {
        $element = $this->object->toDom($this->feed);

        $this->assertInstanceOf('\DomDocument', $element);
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Formatter\FeedRssFormatter::getRootElement
     */
    public function testGetRootElement()
    {
        $element = $this->object->getRootElement();

        $this->assertInstanceOf('\DomDocument', $element);
        $this->assertEquals('rss', $element->firstChild->nodeName);
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Formatter\FeedRssFormatter::setMetas
     */
    public function testSetMetas()
    {
        $element = $this->object->getRootElement();

        $this->object->setMetas($element, $this->feed);
        $this->assertInstanceOf('\DomDocument', $element);
    }

    /**
     * @covers Debril\RssAtomBundle\Protocol\Formatter\FeedRssFormatter::setEntries
     * @covers Debril\RssAtomBundle\Protocol\Formatter\FeedRssFormatter::addEntry
     */
    public function testSetEntries()
    {
        $this->_testSetEntries($this->object);
    }
}
