# find-events-club

This is a rebuild of an earlier version that was developed from Apr-May 2025. This rebuild prioritises developer experience, cost efficiency and building a strong portfolio piece.

### About Version 1

#### V1 Architecture
- AWS CDK (Infrastructure as Code in TypeScript)
- AWS Lambda functions for API endpoints (createEvent, getEvent, updateEvent, deleteEvent etc.)
- API Gateway for REST API
- React + TypeScript + Vite frontend
- PostgreSQL database
- S3 for image storage with presigned URLs
- CloudFront CDN


#### What worked
- **Serverless architecture** was technically sound
- **TypeScript across the stack** provided good type safety
- **AWS CDK** made infrastructure manageable
- **Discord webhook integration** for event moderation

#### What didn't work
- **Costs were too high** (~£35/month) for a personal project (Lambda invocations, API Gateway requests, database hosting, CloudFront)
- **Launched prematurely** and spent energy on user acquisition rather than building a solid foundation
- **Low amount of events** were manually submitted by organisers

#### Key lessons for V2
- **Monolithic architecture** is more cost-effective than serverless for predictable CRUD workloads
- **Automate** event capture as much as possible to provide value
- **Focus on code quality** and portfolio value before considering it a product
- **Open source from day one** to maximise learning and community value
